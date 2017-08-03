<?php /* Smarty version 3.1.27, created on 2017-07-28 14:36:18
         compiled from "E:\OSPanel\domains\hedgehog\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11233597b21b27392f0_86757880%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0472cb4566a895f85b35dfc3eba1cadc7f07c0b4' => 
    array (
      0 => 'E:\\OSPanel\\domains\\hedgehog\\setup\\templates\\footer.tpl',
      1 => 1492683676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11233597b21b27392f0_86757880',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_597b21b2744e83_64584728',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_597b21b2744e83_64584728')) {
function content_597b21b2744e83_64584728 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:/OSPanel/domains/hedgehog/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '11233597b21b27392f0_86757880';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>