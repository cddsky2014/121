<?php /* Smarty version Smarty-3.1.6, created on 2016-06-28 13:58:21
         compiled from "./App/Home/View\Index\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:115625771f684ae8c99-26533408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68d81c4b4e0161270d3ff682e4733e2125f5d640' => 
    array (
      0 => './App/Home/View\\Index\\edit.html',
      1 => 1467093493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115625771f684ae8c99-26533408',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5771f684c5be6',
  'variables' => 
  array (
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5771f684c5be6')) {function content_5771f684c5be6($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="<?php echo U('Index/doEdit');?>
" method="post">
		<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['uid'];?>
">

		<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['uname'];?>
" name="uname"><br>
		<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['email'];?>
" name="eamil"><br>
		<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['tel'];?>
" name="tel">
		<input type="submit" value="提交"><br>
	
	</form>
	
</body>
</html><?php }} ?>