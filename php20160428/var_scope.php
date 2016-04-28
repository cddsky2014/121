<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>变量作用域</title>
</head>
<body>
	<?php
	/*
		页面变量：定义在页面中的变量（函数体外），作用域-定义开始位置到脚本结束位置
		全局变量：被global修饰过的变量
		局部变量：定义在函数体内的变量，作用域-函数内部,注意-形参是局部变量
	*/
		$pi = 3.14;
		function fn(){
			global $pi;
			echo $pi*5*5;
		}
		fn();
		//在函数内部对全局变量重新赋值
		function fn2(){
			global $pi;
			$pi = 3.1415926789;	
			echo $pi*5*5;
		}
		fn2();
		function fn3(){
			global $pi;
			echo $pi*5*5;
		}
		fn3();

	
	?>

</body>
</html>