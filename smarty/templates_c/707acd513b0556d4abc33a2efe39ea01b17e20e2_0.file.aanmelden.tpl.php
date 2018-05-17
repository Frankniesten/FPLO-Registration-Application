<?php
/* Smarty version 3.1.31, created on 2018-05-17 11:08:25
  from "/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/aanmelden.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5afd62a9bc3248_83306593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '707acd513b0556d4abc33a2efe39ea01b17e20e2' => 
    array (
      0 => '/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/aanmelden.tpl',
      1 => 1526555304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd62a9bc3248_83306593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3824036335afd62a9bba913_80851121', 'pageContent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'pageContent'} */
class Block_3824036335afd62a9bba913_80851121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_3824036335afd62a9bba913_80851121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 
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
				<td scope="col"><?php echo $_smarty_tpl->tpl_vars['attributes']->value['firstName'];?>
</td>
			</tr>
			<tr>
				<td scope="col"><b>Achternaam</b></td>
				<td scope="col"><?php echo $_smarty_tpl->tpl_vars['attributes']->value['lastName'];?>
</td>
			</tr>
			<tr>
				<td scope="col"><b>Email</b></td>
				<td scope="col"><?php echo $_smarty_tpl->tpl_vars['attributes']->value['mail'];?>
</td>
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
<?php
}
}
/* {/block 'pageContent'} */
}
