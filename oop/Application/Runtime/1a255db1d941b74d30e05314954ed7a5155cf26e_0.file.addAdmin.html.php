<?php /* Smarty version 3.1.27, created on 2016-06-23 01:17:56
         compiled from "E:\121\oop\Application\Admin\View\Admin\addAdmin.html" */ ?>
<?php
/*%%SmartyHeaderCode:14580576b38c45dc160_50778701%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a255db1d941b74d30e05314954ed7a5155cf26e' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Admin\\View\\Admin\\addAdmin.html',
      1 => 1466644609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14580576b38c45dc160_50778701',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576b38c4651485_88620040',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576b38c4651485_88620040')) {
function content_576b38c4651485_88620040 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14580576b38c45dc160_50778701';
echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<form action="?m=Admin&c=Admin&a=doAddAdmin" method="post" enctype="multipart/form-data">
		  <div class="form-group">
			<label>用户名</label>
			<input name="uname" type="text" class="form-control" >
		  </div>
		  <div class="form-group">
			<label>密码</label>
			<input name="pwd" type="text" class="form-control">
		  </div> 	
		    <div class="form-group">
			<label>确认密码</label>
			<input name="pwd2" type="text" class="form-control">
		  </div> 	
		  <div class="form-group">
			<label>email</label>
			<input name="email" type="text" class="form-control">
		  </div> 	

		  <div class="form-group">
			<label>手机</label>
			<input name="tel" type="text" class="form-control">
		  </div> 

		  <div class="form-group">
			<label>头像</label>
			<input name="file" type="file" class="form-control">
		  </div> 
			  
		  <input type="submit" name="sub" class="btn btn-primary" value="添加">
		</form>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>