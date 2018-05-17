<?php 
	
	include 'functions/functions.php';
	require_once ('config.php');
	
	// include Smarty files:
	require('../vendor/smarty/smarty/libs/Smarty.class.php');
	$smarty = new Smarty();

	$smarty->setTemplateDir('../smarty/templates');
	$smarty->setCompileDir('../smarty/templates_c');
	$smarty->setCacheDir('../smarty/cache');
	$smarty->setConfigDir('../smarty/configs');

	
	$smarty->assign('navbar_title', getConfig($config, 'navbar_title'));
?>