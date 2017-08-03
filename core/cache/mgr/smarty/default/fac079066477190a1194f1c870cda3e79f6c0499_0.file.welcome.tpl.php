<?php /* Smarty version 3.1.27, created on 2017-07-28 14:36:53
         compiled from "E:\OSPanel\domains\hedgehog\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7407597b21d5cabce2_73812572%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac079066477190a1194f1c870cda3e79f6c0499' => 
    array (
      0 => 'E:\\OSPanel\\domains\\hedgehog\\manager\\templates\\default\\welcome.tpl',
      1 => 1492683676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7407597b21d5cabce2_73812572',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597b21d5cafb61_25621960',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597b21d5cafb61_25621960')) {
function content_597b21d5cafb61_25621960 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7407597b21d5cabce2_73812572';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>