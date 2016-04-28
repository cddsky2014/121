<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>函数封装练习</title>
</head>
<body>

	<?php
	//判断一个数字奇数偶数
	function jude_odd_even($num){
		if($num%2==0){
			echo "偶数";
		}else{
			echo "奇数";
		}
	}
	jude_odd_even(99);
	?>
	
</body>
</html>