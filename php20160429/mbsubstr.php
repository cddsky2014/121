<?php
//截取中文
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
?>