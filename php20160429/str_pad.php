<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>填补函数</title>
</head>
<body>
<?php
	/*
		str_pad("源字符串",长度,"填补字符","填类型");
		1、STR_PAD_BOTH :填充到字符串的两头。如果不是偶数，则右侧获得额外的填充。
		2、STR_PAD_LEFT : 填充到字符串的左侧。
		3、STR_PAD_RIGHT : 填充到字符串的右侧。 默认是往右边填充
	*/
	//echo STR_PAD_BOTH;
	$str = "abcdefg";
	//echo str_pad($str,20,"*");
	//echo str_pad($str,20,"*",STR_PAD_LEFT);
	echo str_pad($str,20,"*",STR_PAD_BOTH);


?>
	
</body>
</html>