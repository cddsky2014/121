<?php /* Smarty version 3.1.27, created on 2016-06-21 01:49:42
         compiled from "E:\121\oop\Application\Home\View\Home\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:1040057689d3674a677_51616344%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99107a74619844221787c5ac3e478b7ab2766f4b' => 
    array (
      0 => 'E:\\121\\oop\\Application\\Home\\View\\Home\\login.html',
      1 => 1466473521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1040057689d3674a677_51616344',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57689d367cb510_55613245',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57689d367cb510_55613245')) {
function content_57689d367cb510_55613245 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1040057689d3674a677_51616344';
echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		<form action="?m=Home&c=Home&a=doLogin" method="post">
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
				<img src="?m=Home&c=Home&a=verify" alt="">
			</div>
		  </div>
		  
		  <input type="submit" class="btn btn-default" value="登陆">
		</form>
	</div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>