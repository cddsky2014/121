<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>封装dump函数</title>
</head>
<body>

	<?php
		function dump($a){			
			if(is_string($a)==true){
				echo "字符串 {$a}";
			}elseif(is_int($a)==true){
				echo "整型 {$a}";
			}elseif(is_bool($a)==true){
				echo "布尔 {$a}";
			}elseif(is_float($a)==true){
				echo "浮点 {$a}";
			}elseif(is_null($a)==true){
				echo "NULL";
			}else{
				echo "未知类型";
			}		
		}
		var_dump(123);
		dump(123);
	
	?>
	
</body>
</html>