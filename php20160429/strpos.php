<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>字符定位</title>
</head>
<body>
<?php
/*
1、`strpos` 查找字符串首次出现的位置(效率高)
2、`strstr` 查找字符串的首次出现的位置(大小写敏感)
3、`stristr` 查找字符串的首次出现的位置(大小写不敏感)
*/

$str = "abcFdefg";
//echo strpos($str,"f");
//echo strstr($str,"f");
echo stristr($str,"f");

?>
</body>
</html>