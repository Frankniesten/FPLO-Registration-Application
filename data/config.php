<?php
$config = array ();

//Database Configuration:

	//mySQL Database
	$config['dbHost'] = 'localhost';
	$config['dbName'] = 'register';
	$config['dbUser'] = '****';
	$config['dbPasswd'] = '****';

//SAML Configuration:	

	//Path to simplesamlphp /lib/_autoload.php file:
	$config['simplesamlphp_path'] = '../../lib/_autoload.php';
	
	//simplesamlphp IdP name:
	$config['simplesamlphp_idp'] = 'default-sp';
	
	$config['logout_url'] = '****';
	
	
	//NodeRed URL:
	$config['nodered_url'] = '****';
	
//Layout Configuration:
	
	//Navigation Bar title:
	$config['navbar_title'] = '****';	
?>