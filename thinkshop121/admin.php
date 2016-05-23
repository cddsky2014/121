<?php
session_start();
header("content-type:text/html;charset=utf-8");

if(isset($_SESSION["admin"])==false){
	exit("请先登陆！<a href='./admin/login/login.php'>返回</a>");	
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理</title>
</head>
<body>
	欢迎：<?php echo $_SESSION["admin"];?>
	<a href="./admin/login/logout.php">注销</a>	

	<ul>
		<li><a href="./admin/users/users.php" target="_blank">用户管理</a></li>
	</ul>
</body>
</html>