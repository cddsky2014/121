<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>传参类型</title>
</head>
<body>
	<?php
		function fn($a){
			//$a = 123;
			$a = 456;
			echo $a;					
		}
		$b = 123;
		fn(&$b);//456
		echo $b;//123
	?>
	
</body>
</html>