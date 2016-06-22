<?php /* Smarty version 3.1.27, created on 2016-06-22 01:54:04
         compiled from "E:\121\oop\Application\Admin\View\Admin\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:9905769efbcc82824_23392326%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81fc2a5a97b323f940c7f4756f434bbd159ba1de' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Admin\\View\\Admin\\index.html',
      1 => 1466560442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9905769efbcc82824_23392326',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5769efbcd1ec44_27521349',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5769efbcd1ec44_27521349')) {
function content_5769efbcd1ec44_27521349 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9905769efbcc82824_23392326';
echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<?php echo '后台管理';?>
    
	
<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>