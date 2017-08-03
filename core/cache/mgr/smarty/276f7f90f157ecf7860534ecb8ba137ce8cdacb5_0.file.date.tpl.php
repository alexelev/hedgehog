<?php /* Smarty version 3.1.27, created on 2017-07-30 03:38:40
         compiled from "E:\OSPanel\domains\hedgehog\manager\templates\default\element\tv\renders\properties\date.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24120597d2a9016ebe2_35517830%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '276f7f90f157ecf7860534ecb8ba137ce8cdacb5' => 
    array (
      0 => 'E:\\OSPanel\\domains\\hedgehog\\manager\\templates\\default\\element\\tv\\renders\\properties\\date.tpl',
      1 => 1492683674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24120597d2a9016ebe2_35517830',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597d2a9021aa19_75526627',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597d2a9021aa19_75526627')) {
function content_597d2a9021aa19_75526627 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24120597d2a9016ebe2_35517830';
?>
<div id="modx-tv-wprops-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
"></div>


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
var params = {
<?php
$_from = $_smarty_tpl->tpl_vars['params']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_p'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_p']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_p']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_p']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_p']->value['total'];
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
 '<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
': '<?php echo strtr($_smarty_tpl->tpl_vars['v']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'<?php if (!(isset($_smarty_tpl->tpl_vars['__foreach_p']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_p']->value['last'] : null)) {?>,<?php }?>
<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,labelAlign: 'top'
    ,cls: 'form-with-labels'
    ,border: false
    ,items: [{
        xtype: 'textfield'
        ,fieldLabel: _('date_format')
        ,description: MODx.expandHelp ? '' : _('date_format_desc')
        ,name: 'prop_format'
        ,id: 'prop_format<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,value: params['format'] || '%A %d, %B %Y'
        ,listeners: oc
        ,anchor: '100%'
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'prop_format<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('date_format_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'combo'
        ,fieldLabel: _('date_use_current')
        ,description: MODx.expandHelp ? '' : _('date_use_current_desc')
        ,name: 'prop_default'
        ,hiddenName: 'prop_default'
        ,id: 'prop_default<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,store: new Ext.data.SimpleStore({
            fields: ['v','d']
            ,data: [[1,_('yes')],[0,_('no')]]
        })
        ,displayField: 'd'
        ,valueField: 'v'
        ,mode: 'local'
        ,editable: false
        ,forceSelection: true
        ,typeAhead: false
        ,triggerAction: 'all'
        ,value: params['default'] || 'no'
        ,listeners: oc
        ,width: 200
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'prop_default<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
        ,html: _('default_desc')
        ,cls: 'desc-under'
    }]
    ,renderTo: 'modx-tv-wprops-form<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tv']->value)===null||$tmp==='' ? '' : $tmp);?>
'
});
// ]]>
<?php echo '</script'; ?>
>

<?php }
}
?>