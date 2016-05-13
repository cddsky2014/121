<?php
session_start();

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
</head>
<body>
	<?php
		//判断当前用户是否登陆
		if(isset($_SESSION["uname"])&&$_SESSION["uname"]!=""){
	?>

	欢迎：<?php echo $_SESSION["uname"];?>|
	<a href="./logout.php">注销 </a> 
	<?php }else{?>
	<a href="./login.php">登陆</a>|注册
	<?php }?>


	<div>
		页面内容
	</div>
	
</body>
</html>