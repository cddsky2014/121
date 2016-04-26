<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>赋值运算符和点运算符</title>
</head>
<body>
<?php

	/*
		= 赋值运算符
		$a = 123;
	*/

	/*	
		. 点运算符（字符串链接符号）
	
	$a = '我';
	$b = '爱你';
	$str = $a.$b.'中国';
	echo $str;
	*/

	/*
		单双引号的差别
			单引号中的变量会被直接当作字符串输出
			双引号中的变量会被解释输出变量的值
	
	$a = "好人";
	//$str = "一个".$a;
	//$str = '一个$a';
	$str = "一个{$a}hello";
	$str = "一个".$a."hello";
	echo $str;
	*/

	echo '输出"""""""双引号';

?>
	
</body>
</html>