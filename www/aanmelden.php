<?php 

include $_SERVER['DOCUMENT_ROOT'].'/../data/'.'header.php'; 

	//Include simplesaml auth:
	require_once(getConfig($config, 'simplesamlphp_path'));
	
	
	$as = new SimpleSAML_Auth_Simple(getConfig($config, 'simplesamlphp_idp'));
	$as->requireAuth();
	
	$attributes = $as->getAttributes();
	
	$attributesAccount = array(
		"cn" => $attributes['urn:mace:dir:attribute-def:cn'][0],
		"firstName" => $attributes['urn:mace:dir:attribute-def:givenName'][0],
		"lastName" => $attributes['urn:mace:dir:attribute-def:sn'][0],
		"uid" => $attributes['urn:mace:dir:attribute-def:uid'][0],
		"mail" => $attributes['urn:mace:dir:attribute-def:mail'][0],
		"schacHomeOrganization" => $attributes['urn:mace:terena.org:attribute-def:schacHomeOrganization'][0],
		"EduPersonPrincipalName" => strip_tags($attributes['urn:mace:dir:attribute-def:eduPersonTargetedID'][0]),
		"affiliation" => $attributes['affiliation'][0]
	);

?>

<div class="container">
	
<?php
	
	if (!$attributesAccount['mail']) {
		
		include($_SERVER['DOCUMENT_ROOT'].'/../data/'.'ui/register_warning_no_email.php');
		exit;
	}
	
	//Register account:
	if (isset($_POST['register'])) {
        
        $form_data=$_POST;
        unset($form_data['register']);
      
        //Secure input.
        $form_data = secure_input_array ($form_data);
        
        //Check if user already exists:        
        $sql = "SELECT * FROM register WHERE EduPersonPrincipalName = '".$attributesAccount['EduPersonPrincipalName']."' AND activate = 1";
        $result = pdo_fetch_all ($sql);
        
        if ($result) {
	
	
			include($_SERVER['DOCUMENT_ROOT'].'/../data/'.'ui/register_warning.php');
		}
		
		if (!$result) {
			
			//Generate Activation Token:
			
	        $token = hash('md5', $form_data['firstName'].$form_data['lastName'].$form_data['email'].date('U'));
	        
	        //Insert USerdata in database:
	        $content = array(
		        
		    	"firstName" => $form_data['firstName'],
				"lastName" => $form_data['lastName'],
				"email" => $form_data['email'],
				"schacHomeOrganization" => $attributesAccount['schacHomeOrganization'],
				"EduPersonPrincipalName" => $attributesAccount['EduPersonPrincipalName'],
				"affiliation" => $attributesAccount['affiliation'],
				"surfconext" => 1,
				"token" => $token,
				"activate" => 0
		    );
		    
		    $sql = "INSERT INTO register (firstName, lastName, email, schacHomeOrganization, EduPersonPrincipalName, affiliation, surfconext, token, activate) VALUES (:firstName, :lastName, :email, :schacHomeOrganization, :EduPersonPrincipalName, :affiliation, :surfconext, :token, :activate)";
	
	        pdo_insert ($sql, $content);
	                
	        
	        // Send activiation email to user.
	        $out_email = secure_output ($form_data['email']);
	        $out_firstName = secure_output ($form_data['firstName']);
	        
	        send_email ($out_email, $out_firstName, $token);
			
			//Show succes message:
			include($_SERVER['DOCUMENT_ROOT'].'/../data/'.'ui/register_succes.php');
		}        
	} 

if (!$_POST) {

?>
	<div class="starter-template">
    	<h2>Registreren account</h2>
		<p class="lead">Klik op aanmelden om een account voor de SURFnet FPLO aan te maken.</p>
  	</div>
 
  	<div class="row">
    	<div class="col-2"></div>
		<div class="col border rounded">
			
			<form action="" method="post" id="register-form"  data-toggle="validator" role="form">
				<br>
				<h4>Account gegevens</h4>
				
				<div class="form-group has-feedback">
			    	<label for="exampleInputEmail1">Voornaam</label>
					<input data-minlength="3" type="text" class="form-control-plaintext" id="voornaam" name="firstName" aria-describedby="voornaamHelp" value="<?php echo $attributesAccount['firstName']; ?>" required>
			  	</div>
			  
			  	<div class="form-group has-feedback">
			    	<label for="exampleInputEmail1" class="control-label">Achternaam</label>
					<input type="text" class="form-control-plaintext" id="achternaam" name="lastName" aria-describedby="achternaamHelp" value="<?php echo $attributesAccount['lastName']; ?>" required>
					
			  	</div>
			  
			  	<div class="form-group has-feedback">
			    	<label for="email">E-mail</label>
					<input type="email" class="form-control-plaintext" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $attributesAccount['mail']; ?>" required>
					<div class="help-block with-errors text-muted"></div>
			  	</div>
			  	<br>
			  	<button type="submit" class="btn btn-dark" name="register">Aanmelden</button>
			  
			</form>
			<br>
			
    	</div>
    	<div class="col-2">

    	</div>
  	</div>
  	
  	<?php } ?>
      
    </div><!-- /.container -->
  </body>
</html>