<?php
header("content-type:text/html;charset=utf-8");

/*
	格式：substr(要切割的字符串,起始位置,切割的长度(位置));

	参数1：必须 要处理的字符串；
	参数2：必须 当起始位置为正数的时候，由第一位为0开始数，找到起始位置；当起始位置为负数的时候，表示从字符串最后开始数 （-1，-2，-3），后一位为-1；
	参数3：可选
		当第三个参数省略时，表示一直切到最后
		当第三个参数为正直时，表示我要切割的长度
		当第三个参数为负值时，表示的不再是长度，而是我要切到哪里，从最后为-1开始数

$str="abcdefjhijk";
//echo substr($str,1,3);
//echo substr($str,1,-3);
//echo substr($str,-6,3);
echo substr($str,-6,-4);
*/

//中文乱码问题



function mbsubstr($string, $beginIndex, $length){
	if(strlen($string) < $length){
		return substr($string, $beginIndex);
	} 
	$char = ord($string[$beginIndex + $length - 1]);
	if($char >= 224 && $char <= 239){
		$str = substr($string, $beginIndex, $length - 1);
		return $str;
	} 
	$char = ord($string[$beginIndex + $length - 2]);
	if($char >= 224 && $char <= 239){
		$str = substr($string, $beginIndex, $length - 2);
		return $str;
	} 
	return substr($string, $beginIndex, $length);
}

$str = "abc中文";
echo mbsubstr($str,0,7);

?>