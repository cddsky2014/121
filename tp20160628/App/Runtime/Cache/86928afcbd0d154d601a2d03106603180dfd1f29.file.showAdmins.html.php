<?php /* Smarty version Smarty-3.1.6, created on 2016-06-28 14:34:19
         compiled from "./App/Home/View\Index\showAdmins.html" */ ?>
<?php /*%%SmartyHeaderCode:15575771f3d7c09292-92861669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86928afcbd0d154d601a2d03106603180dfd1f29' => 
    array (
      0 => './App/Home/View\\Index\\showAdmins.html',
      1 => 1467095657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15575771f3d7c09292-92861669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5771f3d7ef734',
  'variables' => 
  array (
    'admins' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5771f3d7ef734')) {function content_5771f3d7ef734($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>

	<a href="<?php echo U('Index/addAdmin');?>
">添加</a>

	<table class="table">
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['tel'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
			<td>
				<a href="<?php echo U('Index/edit',array('uid'=>$_smarty_tpl->tpl_vars['v']->value['uid']),'xml');?>
" class="btn btn-primary btn-xs">编辑</a>
			</td>

		</tr>
		<?php } ?>
	
	</table>

	

	
	
</body>
</html><?php }} ?>