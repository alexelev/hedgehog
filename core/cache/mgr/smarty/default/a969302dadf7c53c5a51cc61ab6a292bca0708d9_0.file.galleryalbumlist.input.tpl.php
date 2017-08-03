<?php /* Smarty version 3.1.27, created on 2017-07-30 03:38:49
         compiled from "E:\OSPanel\domains\hedgehog\core\components\gallery\elements\tv\galleryalbumlist.input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24337597d2a99879a35_79760427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a969302dadf7c53c5a51cc61ab6a292bca0708d9' => 
    array (
      0 => 'E:\\OSPanel\\domains\\hedgehog\\core\\components\\gallery\\elements\\tv\\galleryalbumlist.input.tpl',
      1 => 1501242618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24337597d2a99879a35_79760427',
  'variables' => 
  array (
    'tv' => 0,
    'list' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597d2a99992e71_30969039',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597d2a99992e71_30969039')) {
function content_597d2a99992e71_30969039 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24337597d2a99879a35_79760427';
?>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" type="text" />


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
Ext.onReady(function() {
    var galStore<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = new Ext.data.ArrayStore({
        fields: ['id','name','description','cover'],
        data : <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

    });
    var galTpl<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = new Ext.XTemplate(
        '<tpl for="."><div class="search-item" style="padding: 4px">'
        ,'<tpl if="cover"><div style="float: right;"><img src="{cover}" alt="" /></div></tpl>'
        ,'{name}'
        ,'<br /><span style="font-size: small; font-style: italic">{description}</span>'
        ,'<div style="clear: both;"></div></div></tpl>'
    );

    var fld = MODx.load({
        xtype: 'combo'
        ,store: galStore<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>

        ,displayField: 'name'
        ,valueField: 'id'
        ,name: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,hiddenName: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,mode: 'local'
        ,triggerAction: 'all'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
'
        ,tpl: galTpl<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>

        ,itemSelector: 'div.search-item'
        ,width: <?php if ($_smarty_tpl->tpl_vars['params']->value['width']) {
echo $_smarty_tpl->tpl_vars['params']->value['width'];
} else { ?>400<?php }?>
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['listWidth']) {?>,listWidth: <?php echo $_smarty_tpl->tpl_vars['params']->value['listWidth'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['typeAhead']) {?>
            ,typeAhead: true
            ,typeAheadDelay: <?php if ($_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'] && $_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'] != '') {
echo $_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'];
} else { ?>250<?php }?>
        <?php } else { ?>
            ,editable: false
            ,typeAhead: false
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['listEmptyText']) {?>
            ,listEmptyText: '<?php echo $_smarty_tpl->tpl_vars['params']->value['listEmptyText'];?>
'
        <?php }?>
        ,forceSelection: <?php if ($_smarty_tpl->tpl_vars['params']->value['forceSelection'] && $_smarty_tpl->tpl_vars['params']->value['forceSelection'] != 'false') {?>true<?php } else { ?>false<?php }?>
        ,msgTarget: 'under'
        ,listeners: { 'select': { fn:MODx.fireResourceFormChange, scope:this}}
        
    });

    var pr = Ext.getCmp('modx-panel-resource');
    if (pr) {
        pr.getForm().add(fld);
    }
    MODx.makeDroppable(fld);
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>