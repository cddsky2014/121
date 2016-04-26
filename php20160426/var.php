<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>变量</title>
</head>
<body>
	<?php
		/*
			变量定义和赋值
			$变量名=变量值;

			左口袋 手机
			右口袋 钱包

			1、变量名称必须以字母或下划线开头（不能出现中文）	
			2、变量名称不能以数字开头
			3、变量名称只能包含字母数字字符和下划线
			4、变量名称对大小写敏感
			错误1：Parse error: syntax error
			错误2：var undefined 变量未定义
			5、重复给相同变量赋值那么值会互相覆盖
			6、php的执行顺序是从上到下从左到右
		*/
		$左口袋="手机";
		$右口袋="钱包";
		$name="地瓜";
		$age=20;
		$addr="南京六合";
		$_sex="girl";
		//$1abc = "我的天啊";
		//$a_1?="打死你个龟孙";
		$Name = "土豆";
		echo "hello world";
		echo "<br>";
		echo "<b>this is for everyone</b>";
		echo "<br>";
		echo $Name; 
		print($name);
		print("<hr>");
		print("<b>this is \\for everyone</b>");
		$name="西红柿";
		echo $name;
	?>
</body>
</html>