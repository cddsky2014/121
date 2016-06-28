<?php /* Smarty version Smarty-3.1.6, created on 2016-06-28 11:01:11
         compiled from "./App/Home/View\Index\a.html" */ ?>
<?php /*%%SmartyHeaderCode:238385771d4604075c3-16011620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '734b186974e65b384ac926923d69639d8e6ddebf' => 
    array (
      0 => './App/Home/View\\Index\\a.html',
      1 => 1467082809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238385771d4604075c3-16011620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5771d460518d0',
  'variables' => 
  array (
    'res' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5771d460518d0')) {function content_5771d460518d0($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border=1>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['tel'];?>
</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html><?php }} ?>