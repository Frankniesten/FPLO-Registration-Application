<?php
	
	include $_SERVER['DOCUMENT_ROOT'].'/../data/'.'header.php'; 
?>

<div class="container">

<?php


//Get token from URL:
if (isset($_GET['token'])) {
	$token = $_GET['token'];
}

//Get user details from database with the corresponding token:
$sql = "SELECT * FROM register WHERE token LIKE '".$token."'";
$result = pdo_fetch_all ($sql);


//Handle form input and create FPLO account in FPLO environment:
if ($result) {
	
	if (isset($_POST['register'])) {
        
        //Handle Form input:
        $form_data=$_POST;
        unset($form_data['register']);

               
        //Generate dummy PassWD for SURFconext users or use passWD from form fields:
        if ($result[0]['surfconext'] == TRUE) {
	        $password = hash('md5',random_bytes (20));
        }
        else {
	    	$password = hash('md5', $form_data['password']);
        }
        
        //Hash password for EDUtrac:
        $passwordReady = edutrac_hash ($password);
        

        //De volgende gegevens naar FPLO sturen.
        $account = array(
	        "firstName" => $result[0]['firstName'],
			"lastName" => $result[0]['lastName'],
			"email" => $result[0]['email'],
			"role" => $form_data['Rol'],
			"password" => $passwordReady
        );   


		//Remove Token(s) & Set Activation to TRUE in Database:
        $content = array(
		"email" => $result[0]['email'],
		"token" => "0",
		"activate" => 1

	    );
	    
	    $sql = "UPDATE register SET token = :token, activate = :activate WHERE email=:email";
        pdo_insert ($sql, $content);
 
	      
	    //###CALL NODE RED API###
	    	    
	    //Send user data to NodeRed:
	    $nodered_response = nodered_api ('/person','POST', $account);
	    	    
	    //Show succes message:
	    include $_SERVER['DOCUMENT_ROOT'].'/../data/'.'ui/activate_succes.php';
 	}

	else {
		
		$dateFromDatabase = strtotime($result[0]['timestamp']);
		$tokenDuration = strtotime(getConfig($config, 'tokDur'));
		
		if ($dateFromDatabase >= $tokenDuration) {
			
					include $_SERVER['DOCUMENT_ROOT'].'/../data/'.'ui/activate_verified.php';
		
		?>
		
		<ul class="list-group">
	  <li class="list-group-item list-group-item-dark"><h5 >Account gegevens</h5></li>
	  <li class="list-group-item"><b>Voornaam: </b><?php echo secure_output ($result[0]['firstName']); ?></li>
	  <li class="list-group-item"><b>Achternaam: </b><?php echo secure_output ($result[0]['lastName']); ?></li>
	  <li class="list-group-item "><b>Email: </b><?php echo secure_output ($result[0]['email']); ?></li>
	</ul>
	
	<form action="" method="post" id="activate-account"  role="form" data-toggle="validator">
	<br>
	<ul class="list-group">
		<li class="list-group-item list-group-item-dark"><h5>Selecteer rol</h5></li>
		<li class="list-group-item">
			<div class="form-group col-sm-6">
				<div class="form-check">
					  <label class="form-check-label">
					    <input class="form-check-input" type="radio" name="Rol" id="Rol" value="teacher" required>
					    Docent is mijn rol binnen de leeromgeving.
					  </label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">
					    <input class="form-check-input" type="radio" name="Rol" id="Rol" value="student" required>
					    Student	is mijn rol binnen de leeromgeving.				  </label>
					</div>
				<div class="help-block with-errors text-muted"></div>
			</div>
		</li>
	</ul>
	
	
	
	<?php
		
		if ($result[0]['surfconext'] == FALSE){
		
	?>
	<br>
	<ul class="list-group">
		<li class="list-group-item list-group-item-dark"><h5>Selecteer rol</h5></li>
		<li class="list-group-item">
			<div class="form-group col-sm-6">
				<div class="form-check">
					  <label class="form-check-label">
					    <input class="form-check-input" type="radio" name="Rol" id="Rol" value="teacher" >
					    Docent is mijn rol binnen de leeromgeving.
					  </label>
					</div>
					<div class="form-check">
					  <label class="form-check-label">
					    <input class="form-check-input" type="radio" name="Rol" id="Rol" value="student" checked>
					    Student	is mijn rol binnen de leeromgeving.				  </label>
					</div>
				<div class="help-block with-errors text-muted"></div>
			</div>
		</li>
	</ul>
	<br>
	
	<ul class="list-group">
		<li class="list-group-item list-group-item-dark"><h5 >Stel Wachtwoord in</h5></li>
		<li class="list-group-item">
	
			
			
			<div class="form-group col-sm-6">
				<label for="inputPassword">Wachtwoord</label>
				<input type="password" data-minlength="8" class="form-control" id="inputPassword" placeholder="Wachtwoord" name="password" required>
				<div class="help-block with-errors text-muted"></div>
      		
			<br>
			<label for="inputPasswordConfirm">Herhaal wachtwoord</label>
			<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Herhaal wachtwoord" required>
			<div class="help-block with-errors text-muted"></div>
			</div>
		</li>
	</ul>
	<?php } ?>
	<br>
			<button type="submit" class="btn btn-dark" name="register">Activeer FPLO Account</button>
			<small class="text-muted">Na het activeren van het account wordt je doorgestuurd naar de login pagina van de SURFnet FPLO Omgeving.</small>
		</form>
		
		<?php
		}
		
		
		else {
			
			include $_SERVER['DOCUMENT_ROOT'].'/../data/'.'ui/activate_danger_expired.php';
		}
	}
}

if (!$result) {
	
	include $_SERVER['DOCUMENT_ROOT'].'/../data/'.'ui/activate_danger.php';
}
?>

  </div><!-- /.container -->
  </body>
</html>