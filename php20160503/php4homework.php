<?php
header("content-type:text/html;charset=utf-8");


function filtestr($str){
	$str=trim($str);
	$str = str_replace("他**","***",$str);
	$str = strip_tags($str);
	//$str = substr($str,0,strlen($str)-12);
	$str = substr($str,0,-12);
	return $str;
}

echo filtestr(" 过完五一过十一,过完十一等除夕,怎么他**还不到<a href='###'>放假时间</a>");

?>
