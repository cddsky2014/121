<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>其他函数</title>
</head>
<body>
	<?php
		/*
			- `func_num_args` 返回一个包含函数参数个数
			- `function_exists` 如果给定的函数已经被定义就返回 TRUE 
			- `func_get_arg` 返回参数列表的某一项
			- `call_user_func` 把第一个参数作为回调函数调用
			- `header` 发送原生 HTTP 头
		*/
		function fn1($a,$b,$c){
			//echo func_num_args();	//返回参数个数
			echo func_get_arg(2);//返回某个参数值从0计数
		}		
		call_user_func("fn1",1,2,3);//fn1(1,2,3);
		if(function_exists(fn2)==true){
			fn2();
		}
		
	?>
	
</body>
</html>