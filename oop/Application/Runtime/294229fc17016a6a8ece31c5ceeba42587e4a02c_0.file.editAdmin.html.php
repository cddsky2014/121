<?php /* Smarty version 3.1.27, created on 2016-06-23 01:07:52
         compiled from "E:\121\oop\Application\Admin\View\Admin\editAdmin.html" */ ?>
<?php
/*%%SmartyHeaderCode:7738576b3668726006_42710729%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294229fc17016a6a8ece31c5ceeba42587e4a02c' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Admin\\View\\Admin\\editAdmin.html',
      1 => 1466644070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7738576b3668726006_42710729',
  'variables' => 
  array (
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576b36687a3020_62387357',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576b36687a3020_62387357')) {
function content_576b36687a3020_62387357 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7738576b3668726006_42710729';
echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<form action="?m=Admin&c=Admin&a=doEditAdmin&uid=<?php echo $_smarty_tpl->tpl_vars['admin']->value['uid'];?>
" method="post">
		  <div class="form-group">
			<label>用户名</label>
			<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['uname'];?>
" disabled >
		  </div>
		  <div class="form-group">
			<label>email</label>
			<input name="email" type="text" class="form-control">
		  </div> 	

		  <div class="form-group">
			<label>手机</label>
			<input name="tel" type="text" class="form-control">
		  </div> 
			  
		  <input type="submit" name="sub" class="btn btn-primary" value="修改">
		</form>
	</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>