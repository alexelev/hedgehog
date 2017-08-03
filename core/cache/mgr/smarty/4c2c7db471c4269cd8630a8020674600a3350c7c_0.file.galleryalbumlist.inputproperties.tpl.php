<?php /* Smarty version 3.1.27, created on 2017-07-30 03:38:25
         compiled from "E:\OSPanel\domains\hedgehog\core\components\gallery\elements\tv\galleryalbumlist.inputproperties.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19232597d2a819473a7_82335915%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c2c7db471c4269cd8630a8020674600a3350c7c' => 
    array (
      0 => 'E:\\OSPanel\\domains\\hedgehog\\core\\components\\gallery\\elements\\tv\\galleryalbumlist.inputproperties.tpl',
      1 => 1501242618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19232597d2a819473a7_82335915',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
    'k' => 0,
    'v' => 0,
    'gl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597d2a81ad9989_31988705',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597d2a81ad9989_31988705')) {
function content_597d2a81ad9989_31988705 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19232597d2a819473a7_82335915';
?>
<div id="tv-input-properties-form<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
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
    ,labelWidth: 150
    ,border: false
    ,items: [{
        xtype: 'combo-boolean'
        ,fieldLabel: _('required')
        ,description: _('required_desc')
        ,name: 'inopt_allowBlank'
        ,hiddenName: 'inopt_allowBlank'
        ,id: 'inopt_allowBlank<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['allowBlank'] == 0 || params['allowBlank'] == 'false' ? false : true
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo'
        ,store: [['rank','<?php echo $_smarty_tpl->tpl_vars['gl']->value['rank'];?>
'],['name','<?php echo $_smarty_tpl->tpl_vars['gl']->value['name'];?>
']]
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['sort'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['sort_desc'];?>
'
        ,name: 'inopt_sort'
        ,hiddenName: 'inopt_sort'
        ,forceSelection: true
        ,typeAhead: false
        ,editable: false
        ,triggerAction: 'all'
        ,id: 'inopt_sort<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['sort'] || 'rank'
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo'
        ,store: [['ASC','<?php echo $_smarty_tpl->tpl_vars['gl']->value['ascending'];?>
'],['DESC','<?php echo $_smarty_tpl->tpl_vars['gl']->value['descending'];?>
']]
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['sortdir'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['sortdir_desc'];?>
'
        ,name: 'inopt_dir'
        ,hiddenName: 'inopt_dir'
        ,forceSelection: true
        ,typeAhead: false
        ,editable: false
        ,triggerAction: 'all'
        ,id: 'inopt_dir<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['dir'] || 'DESC'
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['limit'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['limit_desc'];?>
'
        ,name: 'inopt_limit'
        ,hiddenName: 'inopt_limit'
        ,id: 'inopt_limit<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['limit'] || 0
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['start'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['start_desc'];?>
'
        ,name: 'inopt_start'
        ,hiddenName: 'inopt_start'
        ,id: 'inopt_start<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['start'] || 0
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['shownone'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['shownone_desc'];?>
'
        ,name: 'inopt_showNone'
        ,hiddenName: 'inopt_showNone'
        ,id: 'inopt_showNone<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['showNone'] == 0 || params['showNone'] == 'false' ? false : true
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['showcover'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['showcover_desc'];?>
'
        ,name: 'inopt_showCover'
        ,hiddenName: 'inopt_showCover'
        ,id: 'inopt_showCover<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['showCover'] == 0 || params['showCover'] == 'false' ? false : true
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['parent'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['parent_desc'];?>
'
        ,name: 'inopt_parent'
        ,id: 'inopt_parent<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['parent'] || ''
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['subchilds'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['subchilds_desc'];?>
'
        ,name: 'inopt_subchilds'
        ,id: 'inopt_subchilds<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['subchilds'] || ''
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['width'];?>
'
        ,description: '<?php echo $_smarty_tpl->tpl_vars['gl']->value['width_desc'];?>
'
        ,name: 'inopt_width'
        ,id: 'inopt_width<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['width'] || 400
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: _('combo_listwidth')
        ,description: _('combo_listwidth_desc')
        ,name: 'inopt_listWidth'
        ,id: 'inopt_listWidth<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['listWidth'] || ''
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: _('combo_typeahead')
        ,description: _('combo_typeahead_desc')
        ,name: 'inopt_typeAhead'
        ,hiddenName: 'inopt_typeAhead'
        ,id: 'inopt_typeAhead<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['typeAhead'] || false
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: _('combo_typeahead_delay')
        ,description: _('combo_typeahead_delay_desc')
        ,name: 'inopt_typeAheadDelay'
        ,id: 'inopt_typeAheadDelay<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['typeAheadDelay'] || 250
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: _('combo_forceselection')
        ,description: _('combo_forceselection_desc')
        ,name: 'inopt_forceSelection'
        ,hiddenName: 'inopt_forceSelection'
        ,id: 'inopt_forceSelection<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['forceSelection'] || false
        ,width: 300
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: _('combo_listempty_text')
        ,description: _('combo_listempty_text_desc')
        ,name: 'inopt_listEmptyText'
        ,id: 'inopt_listEmptyText<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,value: params['listEmptyText'] || ''
        ,width: 300
        ,listeners: oc
    }]
    ,renderTo: 'tv-input-properties-form<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>