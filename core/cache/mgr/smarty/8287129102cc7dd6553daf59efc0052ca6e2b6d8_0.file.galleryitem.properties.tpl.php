<?php /* Smarty version 3.1.27, created on 2017-07-30 03:36:20
         compiled from "E:\OSPanel\domains\hedgehog\core\components\gallery\elements\tv\galleryitem.properties.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31238597d2a04d84a43_79470471%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8287129102cc7dd6553daf59efc0052ca6e2b6d8' => 
    array (
      0 => 'E:\\OSPanel\\domains\\hedgehog\\core\\components\\gallery\\elements\\tv\\galleryitem.properties.tpl',
      1 => 1501242618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31238597d2a04d84a43_79470471',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597d2a04dc3259_51415157',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597d2a04dc3259_51415157')) {
function content_597d2a04dc3259_51415157 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31238597d2a04d84a43_79470471';
?>
<div id="tv-wprops-form<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
"></div>


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
var params = <?php echo $_smarty_tpl->tpl_vars['params']->value;?>
;
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
var tv = '<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
';
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,labelWidth: 150
    ,border: false
    ,items: []
    ,renderTo: 'tv-wprops-form<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>