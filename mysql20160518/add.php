<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加</title>
</head>
<body>
	<form action="./do_add.php" method="post">
		姓名：<input type="text" name="sname"><br>
		年龄：<input type="text" name="age"><br>
		手机：<input type="text" name="tel"><br>
		出生：<input type="text" name="birth"><br>
		简介：<textarea name="intro"></textarea><br>
		性别：<input checked type="radio" name="sex" value="0">女
			<input type="radio" name="sex" value="1">男
			<input type="radio" name="sex" value="2">保密
		<br>
		<input type="submit" name="sub" value="添加"><br>
	
	</form>
	
	
</body>
</html>