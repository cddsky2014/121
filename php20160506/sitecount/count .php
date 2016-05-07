<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>网站计数器</title>
</head>
<body>

<?php
	$num = file_get_contents("./count.txt");
	$num++;
	file_put_contents("./count.txt",$num);
	//echo $num;
	//str_split — 将字符串转换为数组
	$num_arr = str_split($num);
	foreach($num_arr as $v){
		echo "<img src='./$v.jpg'>";
	}

?>
	
</body>
</html>