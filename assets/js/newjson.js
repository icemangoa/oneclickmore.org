angular.module('formselection', ['ui.bootstrap.typeahead']);

function TypeaheadCtrl($scope) {
    
  $scope.selected = undefined;
  $scope.selectedOption = undefined;
  $scope.eshops = [{
    label: 'Airtickets',
    value: 'http://www.airtickets2.gr',
    tag: 'Tickets',
    icon: 'http://www.oneclickmore.org/assets/images/airtickets.png',
    description: ['tickets'],
    info: 'AirTickets.gr is a ticket booking platform'
  }, {
    label: 'Something',
    value: 'http://www.airtickets.com',
    tag: 'Tickets',
    icon: 'http://www.oneclickmore.org/assets/images/airtickets.png',
    description: ['tickets'],
    info: 'AirTickets.gr is a ticket booking platform'
  }, {
    label: 'Something else',
    value: 'http://www.aitgl.com',
    tag: 'Tickets',
    icon: 'http://www.oneclickmore.org/assets/images/airtickets.png',
    description: ['tickets'],
    info: 'AirTickets.gr is a ticket booking platform'
  }, {
    label: 'Hello',
    value: 'http://www.adfererwewe.co',
    tag: 'Tickets',
    icon: 'http://www.oneclickmore.org/assets/images/airtickets.png',
    description: ['clothes'],
    info: 'AirTickets.gr is a ticket booking platform'
  }, {
    label: 'Astoria',
    value: 'http://www.adsfasdf.org',
    tag: 'Tickets',
    icon: 'http://www.oneclickmore.org/assets/images/airtickets.png',
    description: ['books'],
    info: 'AirTickets.gr is a ticket booking platform'
  }];
     
}
