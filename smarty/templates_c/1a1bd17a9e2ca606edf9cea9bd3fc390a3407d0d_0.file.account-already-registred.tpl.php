<?php
/* Smarty version 3.1.31, created on 2018-05-17 11:05:33
  from "/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/notifications/account-already-registred.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5afd61fd209ea3_12273699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a1bd17a9e2ca606edf9cea9bd3fc390a3407d0d' => 
    array (
      0 => '/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/notifications/account-already-registred.tpl',
      1 => 1526555100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd61fd209ea3_12273699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18711366245afd61fd207a35_73713505', 'pageContent');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'pageContent'} */
class Block_18711366245afd61fd207a35_73713505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_18711366245afd61fd207a35_73713505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="alert alert-danger" role="alert">
	Het e-mailadres is reeds geregistreerd in de SURF pilot modulaire leeromgeving. <a href="../index.php" class="alert-link">Registreer aan ander e-mailadres!</p>
	</div>
<?php
}
}
/* {/block 'pageContent'} */
}
