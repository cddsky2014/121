<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Application/Home/Public/css/home.css">
</head>
<body>
<div class="container">
	<div class="navbar navbar-default">
		<span class="navbar-text navbar-right mg-r-20">		
			<a >
				登陆
			</a>
			<a  >
				注册
			</a>
		</span>		
	</div>

	<div class="row">
		
		

	<div class="col-lg-3"></div>
		<div class="col-lg-6">
			
		<form action="<?php echo U('Index/doRegist');?>" method="post">
		  <div class="form-group">
			<label >用户名</label>
			<input type="text"  name="uname"  class="form-control" placeholder="用户名">
		  </div>
		   <div class="form-group">
			<label >密码</label>
			<input type="password" name="pwd"  class="form-control" placeholder="密码">
		  </div>
		  <div class="form-group">
			<label >确认密码</label>
			<input type="password" name="pwd2" class="form-control" placeholder="确认密码">
		  </div>
		  <div class="form-group">
			<label >手机</label>
			<input type="text" name="tel" class="form-control" placeholder="手机">
		  </div>

		   <div class="form-group">
			<label >邮箱</label>
			<input type="text" name="email" class="form-control" placeholder="邮箱">
		  </div>

		   <div class="form-group row">
			   <div class="col-lg-6">
					<label >验证码</label>				
					<input type="text" name="code" class="form-control" placeholder="验证码">
			   </div>
			   <div class="col-lg-6">
				<img onclick="this.src='<?php echo U('Index/verify');?>?'+Math.random();" src="<?php echo U('Index/verify');?>" alt="">
			   </div>			
		  </div>

	
		  <div class="form-group">
			<label>头像</label>
			<input type="file" id="exampleInputFile">
			<p class="help-block">请上传你的头像</p>
		  </div>

		  <button type="submit" class="btn btn-primary">注册</button>
		</form>		


		</div>
	<div class="col-lg-3"></div>
	

	
	
	</div>
	

</div>
	
</body>
</html>