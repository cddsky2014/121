<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>重复输出字符</title>
</head>
<body>
<?php
	/*
		str_repeat(被重复的字符串,重复的次数)
		注意：重复的次数必须是大于0的
		返回值：重复之后的字符串
	

	echo "-";
	echo "-";
	echo "-";
	echo "-";*/
	//echo str_repeat("-",10);
	function str_rep($char,$num){
		$res = "";		
		for($i=1;$i<=$num;$i++){
			$res .= $char;
		}
		return $res;
	}
	echo str_rep("?",10);

?>
	
</body>
</html>