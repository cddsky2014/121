<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="__CSS__/home.css">
</head>
<body>
<div class="container">

	<div class="navbar navbar-default">
	
		<?php if($_SESSION['uname']== '' ): ?><span class="navbar-text navbar-right mg-r-20">	
			<a href="<?php echo U('Index/login');?>">
				登陆
			</a>
			<a href="<?php echo U('Index/regist');?>">
				注册
			</a>
		</span>	
		<?php else: ?>
		<span class="navbar-text mg-r-20">	
			
			<img width="40px" height="40px" class="img-circle" src="/Uploads/<?php echo (session('photo')); ?>" alt="">
			当前用户：<?php echo (session('uname')); ?>
		</span><?php endif; ?>
			
			
	</div>

	<div class="row">
		
		

	<div class="col-lg-3"></div>
		<div class="col-lg-6">
			
		<form action="<?php echo U('Index/doLogin');?>" method="post" enctype="multipart/form-data">
		  <div class="form-group">
			<label >用户名</label>
			<input type="text"  name="uname"  class="form-control" placeholder="用户名">
		  </div>
		   <div class="form-group">
			<label >密码</label>
			<input type="password" name="pwd"  class="form-control" placeholder="密码">
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

		  <button type="submit" class="btn btn-primary">登陆</button>
		</form>		


		</div>
	<div class="col-lg-3"></div>
	

	
	
	</div>
	

</div>
	
</body>
</html>