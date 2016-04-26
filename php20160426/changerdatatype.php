<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数据类型转换</title>
</head>
<body>
<?php
/*
	(int), (integer) - 转换为整形 integer
	(bool), (boolean) - 转换为布尔类型 boolean
	(float), (double), (real) - 转换为浮点型 float
	(string) 转换为字符串 string

	(array) 转换为数组 array
	(object) 转换为对象 object
	(unset) 转换为 NULL (PHP 5)
*/
	/*
		字符串转数字
		1、只截取第一个非数字字符之前的所有数字，如果前面没有数字转换为0
		2、如果全是数字那么直接转换为整型数值，前导0被忽略	
	//$age="123d456";//123
	$age="a123";//0
	$age="abc";//0
	$age="000123";//123
	var_dump((int)$age);
	*/
	/*
		当转换为 boolean 时，以下值被认为是 FALSE：
			布尔值 FALSE 本身
			整型值 0（零）
			浮点型值 0.0（零） 空字符串，以及字符串 "0"
			不包括任何元素的数组
			特殊类型 NULL（包括尚未赋值的变量）
	*/
	//$val = 0;//false
	//$val = 0.0;//false
	//$val = array();//false
	//$val = null;//false
	//$val = "0";//false
	var_dump((bool)$val);

?>
	
</body>
</html>