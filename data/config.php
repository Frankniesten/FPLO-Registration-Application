<?php
$config = array ();

//MAIN PARAMETERS:

	//mySQL Database
	$config['dbHost'] = 'localhost';
	$config['dbName'] = 'register';
	$config['dbUser'] = '****';
	$config['dbPasswd'] = '****';
	
	//Activation Token duration in hours:
	$config['tokDur'] = '-48 hours';
	
	//Path to simplesamlphp /lib/_autoload.php file:
	$config['simplesamlphp_path'] = '../../lib/_autoload.php';
	
	//simplesamlphp IdP name:
	$config['simplesamlphp_idp'] = 'default-sp';
	
	//NodeRed URL:
	$config['nodered_url'] = 'http://192.168.0.1:50592';
	
	//Enable SAML Registration:
	$config['registration_saml'] = true;
	
	//Enable manual Registration:
	$config['registration_manual'] = false;	
?>	
