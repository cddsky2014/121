<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>嵌套函数</title>
</head>
<body>

	<?php
		function fn1(){
			echo "fn1";
			function fn2(){
				echo "fn2";
				function fn3(){
					echo "fn3";
				}
			}	
		}
		fn1();
		fn2();
		fn3();
	
	?>
	
</body>
</html>