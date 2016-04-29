<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>字符串</title>
</head>
<body>
<?php

	$name="DIM";	
	$str1="This is ' \" for everyone {$name}";
	$str2='This is " \' for everyone {$name}';
	echo $str1;
	echo "<hr>";
	echo $str2;

$html = <<<abc
	<div></div>
	<p></p>
abc;

?>
	
</body>
</html>