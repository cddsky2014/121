<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>常量</title>
</head>
<body>
	<?php
		$name="tony";
		echo $name;

		/*
			define(常量名,值);
			1、定义和赋值方式不同
			2、变量可以被重复赋值，常量一次赋值后值不能被改变
			3、常量的变量名一般使用大写
		*/

		define("PI","3.1415926789");
		echo PI;	
		define("PI","3.14");
		echo PI;

		
	
	?>
	
</body>
</html>