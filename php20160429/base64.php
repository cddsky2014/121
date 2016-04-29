<?php
header("content-type:text/html;charset=utf-8");

/*
 `base64_encode` 使用 MIME base64 对数据进行编码
 `base64_decode` 对使用 MIME `base64` 编码的数据进行解码

 `urlencode` 编码 `URL` 字符串
 `urldecode` 解码已编码的 `URL` 字符串
*/
$str1="http://www.admin.com/index.php?k=中文";
//echo base64_encode($str1);
echo urlencode($str1);

echo "<hr>";
$str2 = "aHR0cDovL3d3dy5hZG1pbi5jb20vaW5kZXgucGhwP2s95Lit5paH";

$str3 = "http%3A%2F%2Fwww.admin.com%2Findex.php%3Fk%3D%E4%B8%AD%E6%96%87";
//echo base64_decode($str2);
echo urldecode($str3);




?>