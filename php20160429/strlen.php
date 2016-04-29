<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>strlen</title>
</head>
<body>
	<?php
		/*
			1、当前字符串的字节数
				8bit=1byte
				1024byte=1kb
				1024kb=1M
			2. 在UTF-8中，每个汉字及符号算3个字符
			3. 在GBK编码中，每个汉字及符号算2个字符
			
		*/
		$str = "hello";//5个字节
		$str = "中文";//6个字节
		echo strlen($str);
	
	
	?>
	
</body>
</html>