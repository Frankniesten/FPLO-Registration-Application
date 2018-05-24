{extends file="layout.tpl"}

{block name=menuPerson}active{/block}
{block name=title}ClubHub - Persoon{/block}

{block name=pageContent}
<form action="" method="post" id="new-person"  role="form">
<div class="row">
	<div class="col-lg-8">
		<h2>{if $header['action'] eq 'edit'}{$reviews['reviewAspect']}{else}Nieuw Diploma{/if}</h2>
	</div>
	<div class="col-lg-4">
		<div class="btn-group float-right" role="group" aria-label="navigatione">
	  		<div class="btn-group float-right" role="group" aria-label="navigatione">
	  			<button type="submit" class="btn btn-info" name="submit"><i class="far fa-save"></i></button>
	  			<a href="person-membership.php?person={$header['person']}" class="btn btn-dark"><i class="fas fa-times"></i></a>
    		</div>
		</div>
	</div>
</div>
<br>

<div class="form-group">
	<label for="diploma">Diploma<font color="red">*</font></label>
		<input type="text" class="form-control" id="diploma" name="diploma" aria-describedby="diplomaHelp" {if $header['action'] == 'edit'}value="{$reviews['diploma']}{/if}" required>
</div>
<div class="form-group">
	<label for="employee">Muziekschool</label>
		<select class="selectpicker form-control" data-live-search="true" data-size="5" name="EducationalOrganization">
			{foreach from=$select key=k item=v}
				<option value="{$v['@id']}">{$v['legalName']}</option>
			{/foreach}
</select>
</div>
<div class="form-group">
	<label for="dateAchieved">Datum</label>
		<input type="date" class="form-control" id="dateAchieved" name="dateAchieved" aria-describedby="dateAchievedHelp" {if $header['action'] == 'edit'}value="{$reviews['dateAchieved']}{/if}">
</div>
</form>
{/block}