<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> </html><![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> </html><![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> </html><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>One Click More</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="assets/css/animations.css" />
<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="assets/css/tabs.css" />
<link rel="stylesheet" type="text/css" href="assets/css/tabstyles.css" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,600&subset=latin,greek-ext,greek" rel="stylesheet" type="text/css">

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>

<script src="assets/js/jquery.typeahead.js"></script>


</head>

<script type="text/javascript">

angular.module('formselection', ['ui.bootstrap.typeahead']);

function TypeaheadCtrl($scope) {

  $scope.selected = undefined;
  $scope.selectedOption = undefined;
  $scope.label = undefined;
  $scope.eshops = [
  
  {
    label: 'Airtickets',
    value: 'www.airtickets.gr',
    tag: 'Tickets',
    icon: 'http://www.oneclickmore.org/assets/images/airtickets.png',
    description: ['tickets'],
    info: 'AirTickets.gr is a ticket booking platform'
  }, 
  {
    label: 'Something',
    value: "www.something.com",
    tag: 'Tickets',
    icon: 'http://www.oneclickmore.org/assets/images/airtickets.png',
    description: ['tickets'],
    info: 'AirTickets.gr is a ticket booking platform'
  }, 
  {
    label: 'Something else',
    value: 'www.aitgl.com',
    tag: 'Tickets',
    icon: 'http://www.oneclickmore.org/assets/images/airtickets.png',
    description: ['tickets'],
    info: 'AirTickets.gr is a ticket booking platform'
  }, 
  {
    label: 'Hello',
    value: 'www.adfererwewe.co',
    tag: 'Tickets',
    icon: 'http://www.oneclickmore.org/assets/images/airtickets.png',
    description: ['clothes'],
    info: 'AirTickets.gr is a ticket booking platform'
  }, 
  {
    label: 'Airtoria',
    value: 'www.adsfasdf.org',
    tag: 'Tickets',
    icon: 'http://www.oneclickmore.org/assets/images/airtickets.png',
    description: ['books'],
    info: 'AirTickets.gr is a ticket booking platform'
  },
  
  ];
     
}



</script> 


<body>


<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<?php include ('topbar.php'); ?>
<?php include ('form.php'); ?>
<?php include ('goals.php'); ?>
<?php include ('causes.php'); ?>
<?php include ('quotes.php'); ?>
<?php include ('team.php'); ?>
<?php include ('faq.php'); ?>
<?php include ('contact.php'); ?>
<?php include ('footer.php'); ?>

</body>
</html>