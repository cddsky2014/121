<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>比较运算符</title>
</head>
<body>
<?php
/*
比较运算符
	$a == $b 等于 TRUE，如果类型转换后 $a 等于 $b。
	$a === $b 全等 TRUE，如果$a 等于$b，并且它们的类型也相同。
	$a != $b 不等 TRUE，如果类型转换后 $a 不等于 $b。
	$a <> $b 不等 TRUE，如果类型转换后 $a不等于$b。
	$a !== $b 不全等 TRUE，如果 $a 不等于 $b，或者它们的类型不同。
	$a < $b 小与 TRUE，如果 $a 严格小于 $b。
	$a > $b 大于 TRUE，如果 $a 严格大于 $b。
	$a <= $b 小于等于 TRUE，如果 $a 小于或者等于 $b。
	$a >= $b 大于等于 TRUE，如果 $a 大于或者等于 $b。

	表达式的值
		真确 true
		错误 false

$a = 1;
$b = 2;
//var_dump(1>2);//false
//var_dump($a<$b);//true
//var_dump($a<=$b);//true
//var_dump($a>=$b);//false
*/
/*
	== 只比较变量的值 !=
	=== 比较值和变量的类型 !==
*/
$a=2;
$b="2";
var_dump($a==$b);//true
var_dump($a===$b);//false





?>
	
</body>
</html>