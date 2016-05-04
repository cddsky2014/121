<?php
	$arr1 = array("a","b","c");

	//var_dump(in_array("a",$arr));//true
	//自定义封装一个函数判断元素是否存在
	function uin_array($chr,$arr){
		foreach($arr as $v){
			if($v==$chr){
				return true;
			}
		}
		return false;
	}
	var_dump(uin_array("z",$arr1));

?>