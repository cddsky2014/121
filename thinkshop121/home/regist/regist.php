<?php
	session_start();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>

	<form action="do_regist.php" method="post">
		用户名：<input type="text" name="uname"><br>
		密码：<input type="password" name="pwd"><br>
		确认密码：<input type="password" name="pwd2"><br>
		email：<input type="text" name="email"><br>
		手机：<input type="text" name="tel"><br>
		验证码：<input type="text" name="code">
		<?php
			//生成验证码
			echo $code = rand("1111","9999");
			$_SESSION["code"]=$code;
		?>
		<br>
		<input type="submit" name="sub" value="注册"><br>	
	</form>
	
</body>
</html>