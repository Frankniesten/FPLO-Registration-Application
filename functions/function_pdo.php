<?php 
	
	//Invoegen van nieuwe data in DB.
function pdo_insert ($sql, $content) {
	
	global $config;
	$pdo = new PDO('mysql:host='.getConfig($config, 'dbHost').';dbname='.getConfig($config, 'dbName'),getConfig($config, 'dbUser'),getConfig($config, 'dbPasswd')); 
	
	$statement = $pdo->prepare($sql);
	$statement->execute($content);

}

//Ophalen van gegevens in DB
function pdo_fetch_all ($sql) {
	
	global $config;
	$pdo = new PDO('mysql:host='.getConfig($config, 'dbHost').';dbname='.getConfig($config, 'dbName'),getConfig($config, 'dbUser'),getConfig($config, 'dbPasswd'));
	
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);	

	return $result;
}

?>