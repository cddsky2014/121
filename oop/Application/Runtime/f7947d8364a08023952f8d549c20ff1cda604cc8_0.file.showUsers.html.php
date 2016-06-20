<?php /* Smarty version 3.1.27, created on 2016-06-20 06:15:18
         compiled from "E:\121\oop\Application\Home\View\Index\showUsers.html" */ ?>
<?php
/*%%SmartyHeaderCode:14939576789f65e4749_47511597%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7947d8364a08023952f8d549c20ff1cda604cc8' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Home\\View\\Index\\showUsers.html',
      1 => 1466403315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14939576789f65e4749_47511597',
  'variables' => 
  array (
    'res' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576789f666d2e1_78665295',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576789f666d2e1_78665295')) {
function content_576789f666d2e1_78665295 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14939576789f65e4749_47511597';
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