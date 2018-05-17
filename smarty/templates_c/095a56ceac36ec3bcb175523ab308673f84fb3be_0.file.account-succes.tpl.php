<?php
/* Smarty version 3.1.31, created on 2018-05-17 11:38:47
  from "/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/notifications/account-succes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5afd69c7ebf525_09563889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '095a56ceac36ec3bcb175523ab308673f84fb3be' => 
    array (
      0 => '/Users/frankniesten/Documents/Development/FPLO-Registration-Application/smarty/templates/notifications/account-succes.tpl',
      1 => 1526557115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afd69c7ebf525_09563889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4638149135afd69c7ebdd13_62248915', 'pageContent');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'pageContent'} */
class Block_4638149135afd69c7ebdd13_62248915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_4638149135afd69c7ebdd13_62248915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br>
<br>
<div class="jumbotron">
  <h1 class="display-4">Welkom!</h1>
  <p class="lead">Je account is succesvol aangemaakt. Klik op onderstaande button om definitief in te loggen op de SURF pilot modulaire leeromgeving.</p>
  <p class="lead">
    <a class="btn btn-default btn-lg" href="https://www.pilot.fplo.surfnet.nl" role="button">Aan de slag</a>
  </p>
</div>
<iframe src="https://account.pilot.fplo.surfnet.nl/simplesaml/module.php/core/authenticate.php?as=default-sp&logout" width="500px" height="500px"></iframe>
<?php
}
}
/* {/block 'pageContent'} */
}
