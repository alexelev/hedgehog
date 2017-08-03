<?php /* Smarty version 3.1.27, created on 2017-07-28 14:40:03
         compiled from "E:\OSPanel\domains\hedgehog\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13645597b2293dff260_90518173%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b82686d74315537076441eef8535d7010a37a9a9' => 
    array (
      0 => 'E:\\OSPanel\\domains\\hedgehog\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1492683676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13645597b2293dff260_90518173',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597b2293e06f60_05044978',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597b2293e06f60_05044978')) {
function content_597b2293e06f60_05044978 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13645597b2293dff260_90518173';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>