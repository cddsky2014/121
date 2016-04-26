<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>逻辑运算符</title>
</head>
<body>
	<?php
		/*
			&&与运算 真真得真其他为假
				true && true=true
				true && false=false
				false && true=false
				false && false=false
			||或运算 假假得假其他为真
				true || true=true
				true || false=true
				false || true=true
				false || false=false
			!非运算 非真即假
				!true = false
				!false = ture
		*/
		$a = true;
		$b = false;
		var_dump($a&&$b);//false
		var_dump($a||$b);//ture
		var_dump(!$a);//false
		var_dump(!$b);//true


	
	?>
	
</body>
</html>