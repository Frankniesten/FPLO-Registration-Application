<?php
	
//Acces NodeRed API:
function nodered_api ($request, $method, $data){

$data = http_build_query($data);		
		global $config;
		$url = getConfig($config, 'nodered_url').$request;
		$options = array(
	        'http' => array(
	                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
	                'method'  => $method,
	                'content' => $data,
	        )
	);
	
	// get data 
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) { 
	        echo "*** OOPS: not connected ***\n";
	        exit;
	}
	
	// store
	$persondata = json_decode($result, true);
	
	
	$response = array(
		'header' => $http_response_header,
		'body' => $persondata
		);
	
	return $response;
}
	
?>
