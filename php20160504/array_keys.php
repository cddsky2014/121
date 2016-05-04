<?php
	$arr1 = array(1,2,3,"name"=>"lucy","age"=>23,"addr"=>"USA");	
	print_r($arr1);	
	print_r(array_keys($arr1));
	function uarray_keys($a){		
		$arr = array();
		foreach($a as $k=>$v){
			$arr[]=$k;
		}
		return $arr;
	}


?>