<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>

	<form action="./do_login.php" method="post">
		username <input type="text" name="username"><br>
		password <input type="password" name="password"><br>
		verifycode <input type="text" name="verifycode">
		<img onclick="this.src='./code.php?'+Math.random();" src="./code.php" alt="">
		<br>

		<input type="submit" value="登陆">
	</form>
	
</body>
</html>