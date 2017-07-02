<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/movie'] = array('controller' => 'MovieDetailController', 'uniqueName' => 'movieDetails');
$route['/movie.html'] = array('controller' => 'MovieDetailController', 'uniqueName' => 'movieDetails');

$route['/account'] = array('controller' => 'AccountController', 'uniqueName' => 'account');
$route['/account.html'] = array('controller' => 'AccountController', 'uniqueName' => 'account');

$route['/notification'] = array('controller' => 'NotificationController', 'uniqueName' => 'notification');
$route['/notification.html'] = array('controller' => 'NotificationController', 'uniqueName' => 'notification');


$route['/contact'] = array('controller'=> 'ContactController', 'uniqueName' => 'contact');
$route['/contact.html'] = array('controller'=> 'ContactController', 'uniqueName' => 'contact');

$route['/about'] = array('controller'=> 'AboutController', 'uniqueName' => 'about');
$route['/about.html'] = array('controller'=> 'AboutController', 'uniqueName' => 'about');

$route['/home'] = array('controller'=> 'HomeController', 'uniqueName' => 'home');
$route['/home.html'] = array('controller'=> 'HomeController', 'uniqueName' => 'home');