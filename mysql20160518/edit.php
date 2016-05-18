<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑</title>
</head>
<body>
	<form action="./do_edit.php" method="post">
		编号：<input type="text" value="<?php echo $_GET["sid"];?>" name="sid"><br>
		姓名：<input type="text" name="sname"><br>
		年龄：<input type="text" name="age"><br>
		手机：<input type="text" name="tel"><br>
		出生：<input type="text" name="birth"><br>
		简介：<textarea name="intro"></textarea><br>
		性别：<input checked type="radio" name="sex" value="0">女
			<input type="radio" name="sex" value="1">男
			<input type="radio" name="sex" value="2">保密
		<br>
		<input type="submit" name="sub" value="修改"><br>
	
	</form>	
	
</body>
</html>