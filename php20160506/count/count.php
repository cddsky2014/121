<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>计数器</title>
</head>
<body>
	<?php
		/*
			图片计数器
			str_split(字符串) — 将字符串转换为数组
			返回一个数组
		*/
		$num = file_get_contents("./count.txt");
		$num++;
		file_put_contents("./count.txt",$num);

		//将字符串转换为数组
		$arrnum = str_split(file_get_contents("./count.txt"));

		foreach($arrnum as $v){
			echo "<img width='40px' src='./$v.jpg'>";
		} 

	
	?>
</body>
</html>