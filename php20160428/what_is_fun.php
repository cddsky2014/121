<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>什么是函数</title>
</head>
<body>
	<?php

		/*

		echo "<table border=1>";
		for($i=1;$i<=3;$i++){
			echo "<tr>";
			echo "<td>{$i}</td><td>{$i}</td>";
			echo "</tr>";
		}
		echo "</table>";

		*/

		/*
			function 函数名([参数,参数]){
				执行语句;
			}
			注意：函数不能重复定义，函数名必须要有意义，不能使用系统函数名

			1、形参可以有多个，形参个数最多可定义26个
			2、形参如果没有默认值那么在调用的时候必须传值
			3、形参和实参一一对应进行赋值，不能隔参传参
			4、默认值最好只给最后几个形参
		*/

		function table($row,$col){
			//$row = 5;
			//$col = 3;
			echo "<table border=1>";
			for($i=1;$i<=$row;$i++){
				echo "<tr>";
				for($j=1;$j<=$col;$j++){
					echo "<td>{$i},{$j}</td>";
				}				
				echo "</tr>";
			}
			echo "</table>";
		}
		$a=3;
		$b=4
		//table($a,$b);//3,4
		
	


		



	
	?>
</body>
</html>