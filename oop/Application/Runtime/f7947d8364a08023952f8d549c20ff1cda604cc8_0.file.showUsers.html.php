<?php /* Smarty version 3.1.27, created on 2016-06-20 06:41:15
         compiled from "E:\121\oop\Application\Home\View\Index\showUsers.html" */ ?>
<?php
/*%%SmartyHeaderCode:293255767900b11a090_11087814%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7947d8364a08023952f8d549c20ff1cda604cc8' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Home\\View\\Index\\showUsers.html',
      1 => 1466404873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293255767900b11a090_11087814',
  'variables' => 
  array (
    'res' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5767900b1ae7c3_31054133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5767900b1ae7c3_31054133')) {
function content_5767900b1ae7c3_31054133 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '293255767900b11a090_11087814';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<table border='1px'>

	<tr>
		<td>用户名</td>
		<td>email</td>
		<td>手机</td>
		<td>操作</td>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['res']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['tel'];?>
</td>
		<td>
			<a href="?m=Home&c=Index&a=editUser&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">编辑</a>
		</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>

</table>
	
</body>
</html><?php }
}
?>