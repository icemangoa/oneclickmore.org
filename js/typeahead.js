angular.module('ui.bootstrap.typeahead', [])

/**
 * A helper service that can parse typeahead's syntax (string provided by users)
 * Extracted to a separate service for ease of unit testing
 */
  .factory('typeaheadParser', ['$parse', function ($parse) {

  //                      0000011100000000000002220000000000000000333333333333333000000000004400055550000000
  var TYPEAHEAD_REGEXP = /^\s*(.*?)(?:\s+with\s+(.*?))?(?:\s+as\s+(.*?))?\s+for\s+(?:([\$\w][\$\w\d]*))\s+in\s+(.*)$/;

  return {
    parse:function (input) {

      var match = input.match(TYPEAHEAD_REGEXP), modelMapper, viewMapper, source;
      if (!match) {
        throw new Error(
          "Expected typeahead specification in form of '_modelValue_ (as _label_)? for _item_ in _collection_'" +
            " but got '" + input + "'.");
      }

      // take name of label property (f.eks. state.label => label)
      var label = match[3] || match[2];
      if (label.lastIndexOf('.') !== -1) {
        label = label.substr(label.lastIndexOf('.') + 1);
      }
      
      var description = match[1];
      if (description.lastIndexOf('.') !== -1) {
        description = description.substr(description.lastIndexOf('.') + 1);
      }

      return {
        itemName:match[4],
        source:$parse(match[5]),
        viewMapper:$parse(match[3] || match[2]),
        modelMapper:$parse(match[2]),
        label:label,
        description:description
      };
    }
  };
}])

  //options - min length
  .directive('typeahead', ['$compile', '$q', 'typeaheadParser', function ($compile, $q, typeaheadParser) {

  var HOT_KEYS = [9, 13, 27, 38, 40];

  return {
    require:'ngModel',
    link:function (originalScope, element, attrs, modelCtrl) {

      var selected = modelCtrl.$modelValue;

      //minimal no of characters that needs to be entered before typeahead kicks-in
      var minSearch = originalScope.$eval(attrs.typeaheadMinLength) || 1;

      //expressions used by typeahead
      var parserResult = typeaheadParser.parse(attrs.typeahead);

      //create a child scope for the typeahead directive so we are not polluting original scope
      //with typeahead-specific data (matches, query etc.)
      var scope = originalScope.$new();
      originalScope.$on('$destroy', function(){
        scope.$destroy();
      });

      var resetMatches = function() {
        scope.matches = [];
        scope.activeIdx = -1;
      };

      var getMatchesAsync = function(inputValue) {

        var locals = {$viewValue: inputValue};
        $q.when(parserResult.source(scope, locals)).then(function(matches) {

          //it might happen that several async queries were in progress if a user were typing fast
          //but we are interested only in responses that correspond to the current view value
          if (inputValue === modelCtrl.$viewValue) {
            if (matches.length > 0) {

              scope.activeIdx = 0;
              scope.matches.length = 0;

              //transform labels
              for(var i=0; i<matches.length; i++) {
                locals[parserResult.itemName] = matches[i];

                // only use matches where the inputValue matches the label of the object
                if (matches[i][parserResult.label].toLowerCase().indexOf(inputValue) !== -1
                || matches[i][parserResult.description].toString().toLowerCase().indexOf(inputValue) !== -1) {
                  var str = "";
                  // only use matches where the inputValue matches the synonyms of the object
                  
                  if (parserResult.description !== undefined
                      && matches[i][parserResult.description] !== undefined
                      && matches[i][parserResult.description].toString().toLowerCase().indexOf(inputValue) !== -1) {
                    var syns = matches[i][parserResult.description];
                    
                    if (syns.length > 0) {
                      for (var j=0; j<syns.length; j++) {
                        if (syns[j].toLowerCase().indexOf(inputValue) !== -1) {
                          if (str.length > 0) {
                            str += ", " + syns[j];
                          } else {
                            str += syns[j];
                          }
                        }
                      }
                      str = " (" + str + ")";
                    }
                  }
                  
                  scope.matches.push({
                    label: parserResult.viewMapper(scope, locals) + str,
                    model: matches[i]
                  });
                }
              }

              scope.query = inputValue;

            } else {
              resetMatches();
            }
          }
        }, resetMatches);
      };

      resetMatches();

      //we need to propagate user's query so we can higlight matches
      scope.query = undefined;

      //plug into $parsers pipeline to open a typeahead on view changes initiated from DOM
      //$parsers kick-in on all the changes coming from the vview as well as manually triggered by $setViewValue
      modelCtrl.$parsers.push(function (inputValue) {

        resetMatches();
        if (selected) {
          return inputValue;
        } else {
          if (inputValue && inputValue.length >= minSearch) {
            getMatchesAsync(inputValue);
          }
        }

        return undefined;
      });

      modelCtrl.$render = function () {
        var locals = {};
        locals[parserResult.itemName] = selected;
        element.val(parserResult.viewMapper(scope, locals) || modelCtrl.$viewValue);
        selected = undefined;
      };

      scope.select = function (activeIdx) {
        //called from within the $digest() cycle
        var locals = {};
        locals[parserResult.itemName] = selected = scope.matches[activeIdx].model;

        modelCtrl.$setViewValue(parserResult.modelMapper(scope, locals));
        modelCtrl.$render();
      };

      //bind keyboard events: arrows up(38) / down(40), enter(13) and tab(9), esc(9)
      element.bind('keydown', function (evt) {

        //typeahead is open and an "interesting" key was pressed
        if (scope.matches.length === 0 || HOT_KEYS.indexOf(evt.which) === -1) {
          return;
        }

        evt.preventDefault();

        if (evt.which === 40) {
          scope.activeIdx = (scope.activeIdx + 1) % scope.matches.length;
          scope.$digest();

        } else if (evt.which === 38) {
          scope.activeIdx = (scope.activeIdx ? scope.activeIdx : scope.matches.length) - 1;
          scope.$digest();

        } else if (evt.which === 13 || evt.which === 9) {
          scope.$apply(function () {
            scope.select(scope.activeIdx);
          });

        } else if (evt.which === 27) {
          scope.matches = [];
          scope.$digest();
        }
      });

      var tplElCompiled = $compile("<typeahead-popup matches='matches' active='activeIdx' select='select(activeIdx)' "+
        "query='query'></typeahead-popup>")(scope);
      element.after(tplElCompiled);
    }
  };

}])


  .directive('typeaheadPopup', function () {
    return {
      restrict:'E',
      scope:{
        matches:'=',
        query:'=',
        active:'=',
        select:'&'
      },
      replace:true,
      templateUrl:'js/template/typeahead/typeahead.html',
      link:function (scope, element, attrs) {

        scope.isOpen = function () {
          return scope.matches.length > 0;
        };

        scope.isActive = function (matchIdx) {
          return scope.active == matchIdx;
        };

        scope.selectActive = function (matchIdx) {
          scope.active = matchIdx;
        };

        scope.selectMatch = function (activeIdx) {
          scope.select({activeIdx:activeIdx});
        };
      }
    };
  })

  .filter('typeaheadHighlight', function() {
    return function(matchItem, query) {
      return (query) ? matchItem.replace(new RegExp(query, 'gi'), '<strong>$&</strong>') : query;
    };
  });