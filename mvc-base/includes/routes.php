<?php

//define Routes
$route['/'] = array('controller' => 'GroupOverviewController', 'uniqueName' => 'GroupOverview');
$route['/index'] = array('controller' => 'GroupOverviewController', 'uniqueName' => 'GroupOverview');
$route['/index.html'] = array('controller' => 'GroupOverviewController', 'uniqueName' => 'GroupOverview');


$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');


$route['/contact'] = array('controller' => 'ContactController', 'uniqueName' => 'contact');
$route['/contact.html'] = array('controller' => 'ContactController', 'uniqueName' => 'contact');


$route['/movie'] = array('controller' => 'MovieDetailController', 'uniqueName' => 'movieDetails');
$route['/movie.html'] = array('controller' => 'MovieDetailController', 'uniqueName' => 'movieDetails');