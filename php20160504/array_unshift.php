<?php
$arr = array("age"=>23,1,2,3,4);
//$arr[] = 5;
/*
	从数组的头部插入（入队）或删除（出队）一个元素
	从数组的尾部插入（入栈）或删除（出栈）一个元素
	1、会对源数组产生影响
	2、键名会重新索引
*/
array_unshift($arr,5,4);
print_r($arr);

echo array_shift($arr);
print_r($arr);

array_push($arr,5,6,7,8);
array_pop($arr);



?>