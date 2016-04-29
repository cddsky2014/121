<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>去除空白</title>
</head>
<body>

<?php
	/*
		去空格函数（或其他字符）
		1、trim() 对表单进行处理的时候 百分之百要用到去空格函数（或其他字符）
		2、ltrim|rtrim 删除字符串开头|结尾的空白字符（或其他字符）


	$str = " Hello world ";
	echo "!".$str."!";
	echo "<hr>";

	$str = trim($str," ");
	echo "!".$str."!";
	*/
	$str = "abc Hello world abc";

	//echo trim($str,"abc");
	//echo ltrim($str,"abc");
	echo rtrim($str,"abc");

?>
	
</body>
</html>