<?php 
	include 'header.php';
	
	//Include simplesaml auth:
	require_once(getConfig($config, 'simplesamlphp_path'));
	
	
	$as = new SimpleSAML_Auth_Simple(getConfig($config, 'simplesamlphp_idp'));
	$as->requireAuth();
	
	$attributes = $as->getAttributes();
	
	
	//Dit kan nog weg
	print_r($attributes);
	
	
	
?>
<div class="container">

 	<div class="starter-template">
    	<h2>Afronden aanmelding via SURFconext</h2>
		<p class="lead">Klik op aanmelden om een account voor de SURFnet FPLO aan te maken.</p>
  	</div>
 
  	<div class="row">
    	<div class="col-2"></div>
		<div class="col border rounded">
			
			 <form>
				 <br>
				  <h4>Account gegevens</h4>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Voornaam</label>
			    <input type="text" class="form-control" id="voornaam" aria-describedby="voornaamHelp" placeholder="Voornaam">
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleInputEmail1">Achternaam</label>
			    <input type="text" class="form-control" id="achternaam" aria-describedby="achternaamHelp" placeholder="Achternaam">
			  </div>
			  
			  <div class="form-group">
			    <label for="exampleInputEmail1">E-mail</label>
			    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail">
			  </div>
			  
			  <br>
			  <button type="submit" class="btn btn-dark">Aanmelding afronden</button>
			  
			</form>
			<br>	
    	</div>
    	<div class="col-2">

    	</div>
  	</div>
      
      
      
      
      
      
      
      
      
      
           
      
      
      
       </div><!-- /.container -->
  </body>
</html>