<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>var_static</title>
</head>
<body>
	<?php
		/*
		function fn1(){
			$a=1;
			$a++;
			echo $a;	
		}

		fn1();//2
		fn1();//2
		fn1();//2
		fn1();//2
		*/

		/*
		1、函数下次被调用时，静态变量会保留上次执行的结果；
		2、静态变量的声明 在整个脚本执行中只有第一次会执行		
		*/
		function fn1(){
			static $a=1;
			$a++;
			echo $a;	
		}
		fn1();
		/*
		$a=1;
		$a++;
		echo $a;//$a=2
		*/
		fn1();
		/*
		$a++;
		echo $a;//3
		*/
		fn1();
		/*
		$a++;
		echo $a;//4
		*/

	?>
	
</body>
</html>