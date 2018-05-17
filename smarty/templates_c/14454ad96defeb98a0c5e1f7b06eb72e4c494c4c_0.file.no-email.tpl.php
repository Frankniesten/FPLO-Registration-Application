<?php
/* Smarty version 3.1.31, created on 2018-05-17 10:07:10
  from "/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/notifications/no-email.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5afd544e312b07_22359202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14454ad96defeb98a0c5e1f7b06eb72e4c494c4c' => 
    array (
      0 => '/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/notifications/no-email.tpl',
      1 => 1526551628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd544e312b07_22359202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1767344025afd544e311549_26680474', 'pageContent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'pageContent'} */
class Block_1767344025afd544e311549_26680474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_1767344025afd544e311549_26680474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="alert alert-danger" role="alert">
	Het e-mailadres is niet geverifieerd bij de gekozen Identity Provider. Verifieer eerst uw e-mailadres en probeer daarna opnieuw een account aan te maken in de SURF pilot modulaire leeromgeving!</p>
	</div>
<?php
}
}
/* {/block 'pageContent'} */
}
