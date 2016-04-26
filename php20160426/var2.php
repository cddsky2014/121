<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>地址变量</title>
</head>
<body>
	<?php

	/*
		&取地址运算符
		$a=$b,实际是将$b中的值复制一份给$a;
		$a=&$b,将$b的数据共享给$a，$b的改变会影响到$a;
	*/
		$a = "123";
		echo $a;//123
		//$b = $a;//将$a的值复制一份给$b;
		$b=&$a;
		echo $b;//123
		$a="456";
		echo $b;//123



	?>
	
</body>
</html>