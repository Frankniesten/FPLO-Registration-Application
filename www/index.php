<?php 
	include $_SERVER['DOCUMENT_ROOT'].'/../data/'.'header.php';
?>

	
<div class="container">
	<div class="starter-template">
        <h2>SURF pilot modulaire leeromgeving</h2>
        <p class="lead">Meld je hier aan om toegang te krijgen tot de SURF pilot modulaire leeromgeving.</p><br>
    </div>
      
    <div class="row"></span>
	    
	    <?php 
	if (getConfig($config, 'registration_saml') == true) { ?> 
	
    	<div class="col">
			<div class="card">
			<div class="card-body" align="center">
				<a href="aanmelden.php"><button type="button" class="btn btn-dark btn-lg">Aanmelden</button></a>
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
				<a href="registreren.php"><button type="button" class="btn btn-dark btn-lg">Registreren</button></a>
		  	</div>
		</div>
    </div>
  </div>
  
  <?php } ?>

</div><!-- /.container -->
	<div class="col-sm-12" style='position:absolute;bottom:0;right:0;'>
        <p><img align="right" src="./media/surflogo.png" alt="surflogo" width="125" height="64" vspace="20"/></p>
    </div>
</body>
</html>