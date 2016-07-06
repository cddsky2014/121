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
		
		
	
	
	</div>
	

</div>
	
</body>
</html>