<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>系统函数</title>
</head>
<body>
	<?php
		/*

			is_int(变量);//返回 true是整型 false不是整型
			is_string(变量);//返回 true是字符串 false不是字符串
		
		*/

		$a = 123;
		//var_dump(is_int($a));//false
		//var_dump(is_string($a));//true		
		if(is_string($a)==true){
			echo "字符串";
		}elseif(is_int($a)==true){
			echo "整型";
		}elseif(is_bool($a)==true){
			echo "布尔";
		}elseif(is_float($a)==true){
			echo "浮点";
		}else{
			echo "未知类型";
		}





	
	?>
	
</body>
</html>