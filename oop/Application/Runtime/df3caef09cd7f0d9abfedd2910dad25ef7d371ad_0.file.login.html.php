<?php /* Smarty version 3.1.27, created on 2016-06-23 00:46:44
         compiled from "E:\121\oop\Application\Admin\View\Admin\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:10727576b317470c827_54553936%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df3caef09cd7f0d9abfedd2910dad25ef7d371ad' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Admin\\View\\Admin\\login.html',
      1 => 1466642435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10727576b317470c827_54553936',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576b3174799257_75968226',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576b3174799257_75968226')) {
function content_576b3174799257_75968226 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10727576b317470c827_54553936';
echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<form action="?m=Admin&c=Admin&a=doLogin" method="post">
		  <div class="form-group">
			<label>用户名</label>
			<input name="uname" type="text" class="form-control" >
		  </div>
		  <div class="form-group">
			<label>密码</label>
			<input name="pwd" type="password" class="form-control">
		  </div> 	
		  <div class="row">
			<div class="col-lg-6">
				  <div class="form-group">
					<label>验证码</label>
					<input name="code" type="text" class="form-control">
				  </div> 
			</div>
			<div class="col-lg-6">
				<img onclick="this.src='?m=Admin&c=Admin&a=verify&'+Math.random();" src="?m=Admin&c=Admin&a=verify" alt="">
			</div>
		  </div>
		  
		  <input type="submit" name="sub" class="btn btn-default" value="登陆">
		</form>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>