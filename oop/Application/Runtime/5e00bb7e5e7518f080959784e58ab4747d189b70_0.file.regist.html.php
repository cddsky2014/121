<?php /* Smarty version 3.1.27, created on 2016-06-20 09:08:51
         compiled from "E:\121\oop\Application\Home\View\Index\regist.html" */ ?>
<?php
/*%%SmartyHeaderCode:210905767b2a369e5c0_23582247%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e00bb7e5e7518f080959784e58ab4747d189b70' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Home\\View\\Index\\regist.html',
      1 => 1466413727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210905767b2a369e5c0_23582247',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5767b2a3717761_13721102',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5767b2a3717761_13721102')) {
function content_5767b2a3717761_13721102 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '210905767b2a369e5c0_23582247';
echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	
<form action="?m=Home&c=Index&a=doRegist" method="post">
	
	用户名：<input type="text" name="uname"><br>
	密码：<input type="password" name="pwd"><br>
	手机：<input type="text" name="tel"><br>
	验证码：<input type="text" name="code">
		<img src="?m=Home&c=Index&a=verify" alt="">
	<br>
	<input type="submit" name="注册"><br>
	
</form>

<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>