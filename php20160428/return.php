<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>函数返回值</title>
</head>
<body>
	<?php
		/*
			return
			1、将函数执行结果返回
			2、return语句一般只写在函数内部
			3、函数的内部可以出现多个return，但只有第一个return会被执行,所以函数内部只写一个return语句就可以了，一般出现在函数的尾部
			4、return语句会中断函数代码块的执行
			5、所有函数必须要有return返回值
		*/
		function fn(){			
			echo 1;
			echo 2;	
			return "我把你给剪了1！";
		}
		echo fn();		

	?>
	
</body>
</html>