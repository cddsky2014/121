<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单</title>
</head>
<body>
	<!--
	<form action="./do_get.php?name=rose&age=20" method="post">
		<input type="submit" value="rose">
	</form>

	<form action="./do_get.php?name=jack&age=20" method="post">
		<input type="submit" value="jack">
	</form>

	-->
	<form action="./do_get.php?a=123&b=456" method="post">
		
		用户名<input type="text" name="uname">
		密码<input type="password" name="pwd">
	
		<input type="submit" value="注册">
	</form>

	<a href="./do_get.php?name=tom&age=20">tom1</a>
	<a href="./do_get.php?name=tom2&age=22">tom2</a>
</body>
</html>