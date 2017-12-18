<?php 

include 'header.php'; 

?>

<div class="container">
	
<?php
	
	if (isset($_POST['register'])) {
        
        $form_data=$_POST;
        unset($form_data['register']);
        
        //Check if user already exists:
        $sql = "SELECT * FROM register WHERE email = '".$form_data['email']."' AND activate = 1";
        $result = pdo_fetch_all ($sql);
        
        if ($result) {
	
	
			include('ui/register_warning.php');
		}
		
		if (!$result) {
			
			//Generate Activation Token:
	        $token = hash('md5', $form_data['firstName'].$form_data['lastName'].$form_data['email'].date('U'));
	        
	        //Insert USerdata in database:
	        $content = array(
		        
		    	"firstName" => $form_data['firstName'],
				"lastName" => $form_data['lastName'],
				"email" => $form_data['email'],
				"surfconext" => 0,
				"token" => $token,
				"activate" => 0
		    );
		    
		    $sql = "INSERT INTO register (firstName, lastName, email, surfconext, token, activate) VALUES (:firstName, :lastName, :email, :surfconext, :token, :activate)";
	
	        pdo_insert ($sql, $content);
	                
	        
	        // Send activiation email to user.
	        send_email ($form_data['email'], $form_data['firstName'], $token);
			
			//Show succes message:
			include('ui/register_succes.php');
		}        
	} 

if (!$_POST) {

?>
	<div class="starter-template">
    	<h2>Registreren account</h2>
		<p class="lead">Vul onderstaand formulier in om een account te registreren voor de SURFnet FPLO omgeving.</p>
  	</div>
 
  	<div class="row">
    	<div class="col-2"></div>
		<div class="col border rounded">
			
			<form action="" method="post" id="register-form"  data-toggle="validator" role="form">
				<br>
				<h4>Account gegevens</h4>
				
				<div class="form-group has-feedback">
			    	<label for="exampleInputEmail1">Voornaam</label>
					<input data-minlength="3" type="text" class="form-control" id="voornaam" name="firstName" aria-describedby="voornaamHelp" placeholder="Voornaam" required>
			  	</div>
			  
			  	<div class="form-group has-feedback">
			    	<label for="exampleInputEmail1" class="control-label">Achternaam</label>
					<input type="text" class="form-control" id="achternaam" name="lastName" aria-describedby="achternaamHelp" placeholder="Achternaam" required>
					
			  	</div>
			  
			  	<div class="form-group has-feedback">
			    	<label for="email">E-mail</label>
					<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="E-mail" required>
					<div class="help-block with-errors text-muted"></div>
			  	</div>
			  	<br>
			  	<button type="submit" class="btn btn-dark" name="register">Registratie afronden</button>
			  
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