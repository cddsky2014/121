<?php /* Smarty version 3.1.27, created on 2016-06-23 01:32:25
         compiled from "E:\121\oop\Application\Admin\View\Admin\admins.html" */ ?>
<?php
/*%%SmartyHeaderCode:18461576b3c29f35995_36861700%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca93eaec2467c5907452e500a5721f5f91ad0c7b' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Admin\\View\\Admin\\admins.html',
      1 => 1466645543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18461576b3c29f35995_36861700',
  'variables' => 
  array (
    'admins' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576b3c2a0c64c4_85616309',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576b3c2a0c64c4_85616309')) {
function content_576b3c2a0c64c4_85616309 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18461576b3c29f35995_36861700';
echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<a href="?m=Admin&c=Admin&a=addAdmin" class="btn btn-primary btn-xs">添加</a>
<table class="table">
	<tr>
		<td>用户名</td>
		<td>头像</td>
		<td>邮箱</td>
		<td>手机</td>
		<td>操作</td>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['admins']->value;
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
		<td><img src="./Uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
" alt=""></td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['tel'];?>
</td>
		<td>
			<a href="?m=Admin&c=Admin&a=editAdmin&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" class="btn btn-primary btn-xs">编辑</a>
		</td>
	</tr>		
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</table>


<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>