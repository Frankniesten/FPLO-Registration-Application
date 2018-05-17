<?php
/* Smarty version 3.1.31, created on 2018-05-17 12:05:44
  from "/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5afd70180c7312_86004205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15c9290869a71565343136a099f89f96359b1c16' => 
    array (
      0 => '/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/index.tpl',
      1 => 1526558739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd70180c7312_86004205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16119071255afd70180c56c1_35834265', 'pageContent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'pageContent'} */
class Block_16119071255afd70180c56c1_35834265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_16119071255afd70180c56c1_35834265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


 
<div class="page-header text-center">
	<h1>SURF pilot modulaire leeromgeving</h1>
</div>
<p class="lead text-center">Meld je hier aan om toegang te krijgen tot de SURF pilot modulaire leeromgeving.</p>
<br>
<p class="text-center">
	<a href="aanmelden.php"><button type="button" class="btn btn-default btn-lg">Aanmelden</button></a>
</p>
<?php
}
}
/* {/block 'pageContent'} */
}
