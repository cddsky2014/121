<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>运算符表达式优先级</title>
</head>
<body>

	<?php
	/*
		算数运算符>比较运算符>逻辑运算符
	*/
		$a = 1+3;
		$b = 4*2;;

		$c = $a>$b;//false
		$d = $a<$b;//true
		
		//$c&&$d;//false

		//((1+3)>(4*2))&&((1+3)<(4*2));

		
	?>
	
</body>
</html>