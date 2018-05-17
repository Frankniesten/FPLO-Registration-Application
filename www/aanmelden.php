<?php
	include $_SERVER['DOCUMENT_ROOT'].'/../data/'.'header.php';
	
	//Include simplesaml auth:
	require_once(getConfig($config, 'simplesamlphp_path'));
	
	$as = new SimpleSAML_Auth_Simple(getConfig($config, 'simplesamlphp_idp'));
	$as->requireAuth();
	
	$saml_attributes = $as->getAttributes();
	
	$attributes = array(
		"cn" => $saml_attributes['urn:mace:dir:attribute-def:cn'][0],
		"firstName" => $saml_attributes['urn:mace:dir:attribute-def:givenName'][0],
		"lastName" => $saml_attributes['urn:mace:dir:attribute-def:sn'][0],
		"uid" => $saml_attributes['urn:mace:dir:attribute-def:uid'][0],
		"mail" => $saml_attributes['urn:mace:dir:attribute-def:mail'][0],
		"schacHomeOrganization" => $saml_attributes['urn:mace:terena.org:attribute-def:schacHomeOrganization'][0],
		"EduPersonPrincipalName" => $saml_attributes($attributes['urn:mace:dir:attribute-def:eduPersonTargetedID'][0]),
		"affiliation" => $saml_attributes['affiliation'][0]
	);

	//Check if mail exist as attribute:
	if (!$attributes['mail']) {
		
		$smarty->display('notifications/no-email.tpl');
		exit;
	}
	
	//Check if user already exist in application:    
    $sql = "SELECT * FROM register WHERE EduPersonPrincipalName = '".$attributes['EduPersonPrincipalName']."' AND activate = 1";
    $result = pdo_fetch_all ($sql);
	
	
	//If user already exists show warning:
    if ($result) {
		$smarty->display('notifications/account-already-registred.tpl');
		exit;
	}
	
	//Proces Form:
	if (isset($_POST['register'])) {
		
		//Remove button value.
		$form_data=$_POST;
        unset($form_data['register']);
      
        //Secure input.
        $form_data = secure_input_array ($form_data);
        
		//Save account details in Database:
        $content = array(
	    	"firstName" => "0",
			"lastName" => "0",
			"email" => "0",
			"surfconext" => 1,
			"token" => "0",
			"activate" => 1,
			"schacHomeOrganization" => "0",
			"EduPersonPrincipalName" => $attributes['EduPersonPrincipalName'],
			"affiliation" => "0",
	    );

		$sql = "INSERT INTO register (firstName, lastName, email, surfconext, token, activate,  schacHomeOrganization, EduPersonPrincipalName, affiliation) 
				VALUES (:firstName, :lastName, :email, :surfconext, :token, :activate, :schacHomeOrganization, :EduPersonPrincipalName, :affiliation)";
	
	    pdo_insert ($sql, $content);
     
		//Send User details to FPLO:
        $account = array(
	        "firstName" => $attributes['firstName'],
			"lastName" => $attributes['lastName'],
			"email" => $attributes['mail'],
			"role" => $form_data['Rol'],
			"schacHomeOrganization" => $attributes['schacHomeOrganization'],
			"EduPersonPrincipalName" => $attributes['EduPersonPrincipalName'],
			"affiliation" => $attributes['affiliation']
        ); 
        
        //###CALL NODE RED API###
	    $nodered_response = nodered_api ('/person','POST', $account);
        
		$smarty->assign('logout_url', getConfig($config, 'logout_url'));
		$smarty->display('notifications/account-succes.tpl');
    }

	else {
		$smarty->assign('attributes', $attributes);
		$smarty->display('aanmelden.tpl');	
	}
?>