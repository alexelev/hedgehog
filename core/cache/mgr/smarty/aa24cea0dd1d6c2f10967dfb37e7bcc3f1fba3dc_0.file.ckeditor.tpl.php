<?php /* Smarty version 3.1.27, created on 2017-07-30 02:53:12
         compiled from "E:\OSPanel\domains\hedgehog\core\components\migx\elements\tv\ckeditor.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4333597d1fe87bbfd7_66950090%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa24cea0dd1d6c2f10967dfb37e7bcc3f1fba3dc' => 
    array (
      0 => 'E:\\OSPanel\\domains\\hedgehog\\core\\components\\migx\\elements\\tv\\ckeditor.tpl',
      1 => 1501242580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4333597d1fe87bbfd7_66950090',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597d1fe88295f7_28127154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597d1fe88295f7_28127154')) {
function content_597d1fe88295f7_28127154 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4333597d1fe87bbfd7_66950090';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" style="heigth:200;" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="rtf-ckeditor tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    var tvid = 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
';
    
    var field = (Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
   
    
    field.onLoad = function(){
        //console.log('we load');
                var textArea = Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
').dom;
                field.htmlEditor = MODx.load({
                    xtype: 'modx-htmleditor',
                    width: 'auto',
                    height: parseInt(textArea.style.height) || 200,
                    name: textArea.name,
                    value: textArea.value || '<p></p>'
                });

                textArea.name = '';
                textArea.style.display = 'none';

                field.htmlEditor.render(textArea.parentNode);
                field.htmlEditor.editor.on('key', function(e){ MODx.fireResourceFormChange() });
            
		
    };
        
    field.onHide = function(){
        //console.log('we hide');
        field.htmlEditor.destroy();
   
    };
        
    field.onBeforeSubmit = function(){
        //console.log('we submit');
        field.htmlEditor.getValue();
   
    };        


});

<?php echo '</script'; ?>
>
<?php }
}
?>