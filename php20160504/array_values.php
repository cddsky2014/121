<?php
	$arr1 = array(1,2,3,"name"=>"lucy","age"=>23,"addr"=>"USA");
	
	print_r($arr1);	
	//print_r(array_values($arr1));
	//自定义封装
	function uarray_values($a){
		$arr=array();
		foreach($a as $v){
			$arr[]=$v;
		}
		return $arr;
	}
	print_r(uarray_values($arr1));
	

?>