<?php
/* Smarty version 3.1.31, created on 2018-05-17 11:05:03
  from "/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/notifications/account-already.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5afd61df12c4c1_85657597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f305d8f058410b053f569bfbb2523de9cda6096' => 
    array (
      0 => '/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/notifications/account-already.tpl',
      1 => 1526555100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd61df12c4c1_85657597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7144560005afd61df128c01_09964576', 'pageContent');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'pageContent'} */
class Block_7144560005afd61df128c01_09964576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_7144560005afd61df128c01_09964576',
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
