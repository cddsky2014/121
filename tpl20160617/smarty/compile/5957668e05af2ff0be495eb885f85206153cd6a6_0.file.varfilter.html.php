<?php /* Smarty version 3.1.27, created on 2016-06-20 01:58:27
         compiled from "E:\121\tpl20160617\smarty\template\varfilter.html" */ ?>
<?php
/*%%SmartyHeaderCode:1272157674dc33bc494_52994338%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5957668e05af2ff0be495eb885f85206153cd6a6' => 
    array (
      0 => 'E:\\121\\tpl20160617\\smarty\\template\\varfilter.html',
      1 => 1466387905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1272157674dc33bc494_52994338',
  'variables' => 
  array (
    'name' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57674dc34cdbd3_74885158',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57674dc34cdbd3_74885158')) {
function content_57674dc34cdbd3_74885158 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'E:\\121\\tpl20160617\\smarty\\smarty\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\121\\tpl20160617\\smarty\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1272157674dc33bc494_52994338';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>变量调节器</title>
</head>
<body>
	
	<?php if (isset($_smarty_tpl->tpl_vars['name'])) {$_smarty_tpl->tpl_vars['name'] = clone $_smarty_tpl->tpl_vars['name'];
$_smarty_tpl->tpl_vars['name']->value = 'rOSe TOM'; $_smarty_tpl->tpl_vars['name']->nocache = null; $_smarty_tpl->tpl_vars['name']->scope = 0;
} else $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable('rOSe TOM', null, 0);?>
	<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value,false);?>


	<?php echo strtoupper($_smarty_tpl->tpl_vars['name']->value);?>

	

	<hr>

	<?php echo mb_strtoupper(smarty_modifier_date_format(time(),'time:%H:%M:%S'), 'UTF-8');?>


	<hr>

	<?php  Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, './foo.conf', null, 'local');?>

	<?php echo $_smarty_tpl->getConfigVariable( 'host');?>

	<?php echo $_smarty_tpl->getConfigVariable( 'username');?>

	<hr>
	<?php if (isset($_smarty_tpl->tpl_vars['arr'])) {$_smarty_tpl->tpl_vars['arr'] = clone $_smarty_tpl->tpl_vars['arr'];
$_smarty_tpl->tpl_vars['arr']->value = array('config'=>array('host'=>'127.0.0.3')); $_smarty_tpl->tpl_vars['arr']->nocache = null; $_smarty_tpl->tpl_vars['arr']->scope = 0;
} else $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable(array('config'=>array('host'=>'127.0.0.3')), null, 0);?>
	<?php echo $_smarty_tpl->tpl_vars['arr']->value['config']['host'];?>

	<?php echo $_smarty_tpl->tpl_vars['arr']->value['config']['host'];?>

	<hr>
	<?php echo $_smarty_tpl->getConfigVariable('host');?>

	
	
</body>
</html><?php }
}
?>