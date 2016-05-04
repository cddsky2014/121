<?php
	$arr1 = array("name"=>"lucy","age"=>23,"addr"=>"USA");
	//var_dump(array_key_exists("name",$arr1));
	
	function uarray_key_exists($key,$arr){	
		foreach($arr as $k=>$v){
			if($k==$key){
				return true;
			}
		}
		return false;
	}
	var_dump(uarray_key_exists("ages",$arr1));

?>