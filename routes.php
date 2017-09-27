<?php

define('GET', 'GET');
define('POST', 'POST');

define('SOURCE', 'source');
define('TITLE', 'title');
define('ACTIVE', 'active');
define('REQ_VARS', 'requiredVariables');
define('OPT_VARS', 'optionalVariables');

//////////////////////////////////////////////////////////////////////////////////////////////////
// PAGES | HTTP GET requests only
//////////////////////////////////////////////////////////////////////////////////////////////////

// Home
$routes->map(GET, '/', array(SOURCE => 'home', TITLE => 'Home', ACTIVE => 'home'), null);
$routes->map(GET, '/home', array(SOURCE => 'home', TITLE => 'Home', ACTIVE => 'home'), 'home');

// About
$routes->map(GET, '/about', array(SOURCE => 'about', TITLE => 'About'), 'about');

// Ministries
$routes->map(GET, '/ministries', array(SOURCE => 'ministries', TITLE => 'Ministries'), 'ministries');

// Calendar
$routes->map(GET, '/calendar', array(SOURCE => 'calendar', TITLE => 'Calendar'), 'calendar');

// Connect
$routes->map(GET, '/connect', array(SOURCE => 'connect', TITLE => 'Connect'), 'connect');

//////////////////////////////////////////////////////////////////////////////////////////////////
// API | HTTP GET/POST requests
//////////////////////////////////////////////////////////////////////////////////////////////////



?>
