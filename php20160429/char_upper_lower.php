<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>字符串大小写转换</title>
</head>
<body>

	<?php
		/*
			strtoupper():将字符串中的小写字符转变为大写的字符
			strtolower():将字符串中大写的字符转变为小写的字符
			ucfirst():首字符大写(只针对首字符，不对其他的字符进行操作)
			ucwords():单词首字母大写(只针对每一个单词首字符，不对其他的字符进行操作)
		
		*/
		$str = "This is for world";

		//echo strtoupper($str);
		//echo ucfirst($str);
		echo ucwords($str);
	
	?>
	
</body>
</html>