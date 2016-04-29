<?php

/*
	nl2br 在字符串所有新行之前插入 HTML 换行标记
	htmlspecialchars 将html标签转换为html实体
	htmlspecialchars_decode 将特殊的 HTML 实体转换回普通html字符
	strip_tags 从字符串中去除 HTML和 PHP 标记

*/

$str = "abcefg
hijglmn";
//echo nl2br($str);
$html = "<input type='text' value=''>";
//echo htmlspecialchars($html);
//echo htmlspecialchars_decode("&lt;input type='text' value=''&gt;");

$str3 = "<b>dadadad</b>dasdsa<i>dds</i>ad";
echo strip_tags($str3);


?>

