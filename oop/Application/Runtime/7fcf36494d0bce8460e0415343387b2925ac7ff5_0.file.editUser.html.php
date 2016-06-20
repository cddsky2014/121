<?php /* Smarty version 3.1.27, created on 2016-06-20 07:21:10
         compiled from "E:\121\oop\Application\Home\View\Index\editUser.html" */ ?>
<?php
/*%%SmartyHeaderCode:21394576799663b2153_41639105%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fcf36494d0bce8460e0415343387b2925ac7ff5' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Home\\View\\Index\\editUser.html',
      1 => 1466407140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21394576799663b2153_41639105',
  'variables' => 
  array (
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57679966446886_50278366',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57679966446886_50278366')) {
function content_57679966446886_50278366 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21394576799663b2153_41639105';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="?m=Home&c=Index&a=doEditUser&uid=<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['uid'];?>
" method="post">
		用户名：<input name="uname" type="text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['uname'];?>
"><br>
		emial:<input name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['email'];?>
"><br>
		手机：<input name="tel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['tel'];?>
"><br>
		验证码：<input name="code" type="text">
		<img onclick="this.src='?m=Home&c=Index&a=verify&'+Math.random();" src="?m=Home&c=Index&a=verify" alt="">
		<br>
		<input type="submit" value="编辑"><br>
	
	</form>


</body>
</html><?php }
}
?>