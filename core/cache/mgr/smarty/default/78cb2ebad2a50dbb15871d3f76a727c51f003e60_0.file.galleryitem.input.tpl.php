<?php /* Smarty version 3.1.27, created on 2017-07-30 03:36:36
         compiled from "E:\OSPanel\domains\hedgehog\core\components\gallery\elements\tv\galleryitem.input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26335597d2a14c345a5_75343102%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78cb2ebad2a50dbb15871d3f76a727c51f003e60' => 
    array (
      0 => 'E:\\OSPanel\\domains\\hedgehog\\core\\components\\gallery\\elements\\tv\\galleryitem.input.tpl',
      1 => 1501242618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26335597d2a14c345a5_75343102',
  'variables' => 
  array (
    'tv' => 0,
    'itemjson' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597d2a14cb15c7_27909959',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597d2a14cb15c7_27909959')) {
function content_597d2a14cb15c7_27909959 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26335597d2a14c345a5_75343102';
?>
<div id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-form"></div>
<input type="hidden" id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" value="<?php if ($_smarty_tpl->tpl_vars['itemjson']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['itemjson']->value, ENT_QUOTES, 'UTF-8', true);
} else { ?>{}<?php }?>" />


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
Ext.onReady(function() {
    MODx.load({
        xtype: 'gal-panel-tv'
        ,tv: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,tvValue: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
'
        <?php if ($_smarty_tpl->tpl_vars['itemjson']->value) {?>,data: <?php echo $_smarty_tpl->tpl_vars['itemjson']->value;
}?>
    });
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>