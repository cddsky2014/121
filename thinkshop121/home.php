<?php
session_start();
	define("HOST","http://127.0.0.1/thinkshop121");
	define("PATH","E:/121/thinkshop121");
	include(PATH."/link.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
</head>
<body>
	<?php if(isset($_SESSION["uname"])==false){?>
	<a href="<?php echo HOST;?>/home/login/login.php">登陆</a>
	<a href="<?php echo HOST;?>/home/regist/regist.php">注册</a>
	<?php }else{ ?>
	欢迎：<?php echo $_SESSION["uname"];?>
	<a href="<?php echo HOST;?>/home/login/logout.php">注销</a>
	<?php }?>
	<hr>
	
</body>
</html>