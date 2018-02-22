<?php 
	include $_SERVER['DOCUMENT_ROOT'].'/../data/'.'header.php';
?>

	
<div class="container">
	<div class="starter-template">
        <h2>Registratie SURFnet FPLO</h2>
        <p class="lead">Meld u hier aan om toegang te krijgen tot de SURFnet FPLO omgeving.</p><br>
		<p>Kies voor 'aanmelden via SURFconext' om toegang te krijgen tot de FPLO omgeving via uw eigen persoonlijke instellingsaccount.</p>
    </div>
      
    <div class="row"></span>
	    
	    <?php 
	if (getConfig($config, 'registration_saml') == true) { ?> 
	
    	<div class="col">
			<div class="card">
			<div class="card-body">
		    	<h4 class="card-title">Aanmelden via SURFconext</h4>
				<p class="card-text">Kies deze optie om toegang te krijgen tot de FPLO omgeving met behulp van uw persoonlijke instellingsaccount.</p>
				<a href="aanmelden.php"><button type="button" class="btn btn-dark ">Aanmelden</button></a>
		  </div>
		</div>
    </div>
<?php } ?>    
    
<?php 
	if (getConfig($config, 'registration_manual') == true) { ?>
    <div class="col-1"></div>
    	<div class="col">
			<div class="card">
			<div class="card-body">
		    	<h4 class="card-title">FPLO account registreren</h4>
				<p class="card-text">Kies deze optie om een gebruikersnaam te registreren. Deze gebruikt u vervolgens om in te loggen op de FPLO omgeving.</p>
				<a href="registreren.php"><button type="button" class="btn btn-dark">Registreren</button></a>
		  	</div>
		</div>
    </div>
  </div>
  
  <?php } ?>

</div><!-- /.container -->
</body>
</html>