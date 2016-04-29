<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>字符替换</title>
</head>
<body>

	<?php
	/*
		str_replace("被替换字符","替换字符","源字符串")

		1、str_replace():替换字符串中的某些字符

		2、str_replace(被替换的字符,替换成的字符,原来的字符串)
		返回值：原字符串被替换了一些字符而产生的新字符串
			该函数区分大小写
		3、str_ireplace不区分大小写
	*/
	$str = "abcdefg";
	echo str_replace("a","餮",$str);

	?>
	
</body>
</html>