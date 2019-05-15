<?php

	include_once( './classes/Route.php' );
 	

 	$routes = new Route();


 	// This is the index page. The first route.
	$routes->add('/', 'indexControl');
	$routes->add('home', 'indexControl');
	$routes->add('admin_login', 'indexControl');
	$routes->add('operator_login', 'indexControl');
	$routes->add('index.php', 'indexControl');




?>