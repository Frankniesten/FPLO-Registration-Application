{extends file="layout.tpl"}

{block name=pageContent}

 
<div class="page-header text-center">
	<h1>Account Aanmaken</h1>
</div>
<p class="lead text-center">SURFconext</p>

<div class="row">
  	<div class="col-md-2"></div>
  	<div class="col-md-8">
	  
		<h3>Accountgegevens</h3>  
		<table class="table table-striped">
			<tr>
				<td scope="col" width="150"><b>Voornaam</b></td>
				<td scope="col">{$attributes['firstName']}</td>
			</tr>
			<tr>
				<td scope="col"><b>Achternaam</b></td>
				<td scope="col">{$attributes['lastName']}</td>
			</tr>
			<tr>
				<td scope="col"><b>Email</b></td>
				<td scope="col">{$attributes['mail']}</td>
			</tr>
	</table>
	
	<h3>Selecteer je rol</h3>
	<form action="" method="post" id="activate-account"  role="form">
  		<div class="form-group">
	  		<div class="radio">
	  			<label>
	  				<input type="radio" name="Rol" id="optionsRadios2" value="teacher" required> Docent is mijn rol binnen de leeromgeving.
	  			</label>
  			</div>
  			<div class="radio">
	  			<label>
	  				<input type="radio" name="Rol" id="optionsRadios2" value="student" required> Student	is mijn rol binnen de leeromgeving.
	  			</label>
  			</div>
  		</div>
  	<button type="submit" class="btn btn-default btn-lg" name="register">Aanmaken</button>
	</form>	
  	</div>
  	<div class="col-md-2"></div>
</div>
{/block}