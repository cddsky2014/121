<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆</title>
</head>
<body>

	<form action="<?php echo U('Index/doLogin');?>" method="post">
		
		用户名：<input type="text" name="uname"><br>
		密码：<input name="pwd" type="password"><br>
		<input type="submit" value="登陆">
	
	</form>
	
</body>
</html>