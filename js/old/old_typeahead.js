//FORM TABS
		(function() {

			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});

		})();
			
		
		
		// SEARCH FORM
   		$(document).ready(function () {    
		
		
		$("#hide").click(function () {
			
        
		document.getElementById("premsg").className = "hide";
		document.getElementById("step2").className = "show slideDown";
		
		document.getElementById("section-shape-1").className = "";
		document.getElementById("section-shape-2").className = "content-current";
		
		document.getElementById("listep1").className = "";
		document.getElementById("listep2").className = "tab-current";
		
		
		
		});
		
		
		
		$('.eshops').typeahead({
		
	    name: 'eshops',
    	valueKey: 'name',
	    prefetch: 'eshops.json',
    	template: [
		'<p class="repo-img"><img src="example/{{icon}}"/></p>',
    	'<p class="repo-tag">{{tag}}</p>',
	    '<p class="repo-name">{{name}}</p>',
    	'<p class="repo-description">{{description}}</p>',
	    ].join(''),
	    engine: Hogan,
		
		
		});
		
		
		
		$('.eshops').on('typeahead:selected', function (e, selection) {
	    console.log(selection.linkage);


		
		//to selection einai object. oti 8eleis apo auto to prospernas me .onoma idiotitas ;)
		$("#first").html('<a class="theme_btn color3" href="' + selection.linkage + '/?straydogs" target="blank">Select</a>');
		$("#second").html('<a class="theme_btn color3" href="' + selection.linkage + '/?alextigers" target="blank">Select</a>');		 
		$("#third").html('<a class="theme_btn color3" href="' + selection.linkage + '/?homeless" target="blank">Select</a>');		
		$("#fourth").html('<a class="theme_btn color3" href="' + selection.linkage + '/?sosvillages" target="blank">Select</a>');		
		
		
		document.getElementById("hello").setAttribute("id", "hide");
		document.getElementById("hide").className = "theme_btn color3 pulse";
		
		
		$("#hide").click(function () {
			
        
		document.getElementById("premsg").className = "hide";
		document.getElementById("step2").className = "show slideDown";
		
		document.getElementById("section-shape-1").className = "";
		document.getElementById("section-shape-2").className = "content-current";
		
		document.getElementById("listep1").className = "";
		document.getElementById("listep2").className = "tab-current";
		
		
		
		});
		
		
		
		
		});
		
		
		$("#goback").click(function () {
		
		document.getElementById("section-shape-1").className = "content-current";
		document.getElementById("section-shape-2").className = "";

		document.getElementById("listep1").className = "tab-current";
		document.getElementById("listep2").className = "";
        
		
		});
		
		});
		
		
		
		  
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
              <br/>
             
              <h2>Type below the name of the shop you want to visit:</h2>
              <div class="CustomTemplate">
                <input class="eshops typeahead" autocomplete="off" name="eshops" value="" type="text" placeholder="Example: AirTickets, Public or ASSOS" onkeydown="if (event.keyCode == 13) document.getElementById('hide').click()"/>
              </div>
              <br/>
              <input class="theme_btn_disabled" type="button" id="hello" value="Select">