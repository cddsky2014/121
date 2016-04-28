<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>变量的函数</title>
</head>
<body>
	<?php
		
		function fn1(){
			return "fn1";
		}
		//echo fn1();
		function fn2(){
			return "fn1";
		}
		$fnc = "fn2";
		echo $fnc();//fn1();
		echo $fnc();//fn1();
		echo $fnc();//fn1();
		echo $fnc();//fn1();
		echo $fnc();//fn1();
		echo $fnc();//fn1();
		echo $fnc();//fn1();
		echo $fnc();//fn1();
		
	?>
	
</body>
</html>