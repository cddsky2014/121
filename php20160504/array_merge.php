<?php
	$arr1 = array("name"=>1,2,3);
	$arr2 = array("age"=>4,5,6);
	$arr3 = array("a","b");
	//print_r(array_merge($arr1,$arr2,$arr3));
	
	function uarray_merge($a,$b){
		$r = array();
		foreach($a as $k=>$v){
			if(is_int($k)==true){
				$r[]=$v;
			}else{
				$r[$k]=$v;
			}
			
		}
		foreach($b as $k=>$v){
			if(is_int($k)==true){
				$r[]=$v;
			}else{
				$r[$k]=$v;
			}
		}
		return $r;
	}
	//print_r(uarray_merge($arr1,$arr2));
	
	function arr_merge(){
		$args = func_get_args();
		$r=array();
		foreach($args as $k=>$v){
			foreach($v as $k1=>$v1){
				if(is_int($k1)==true){
					$r[]=$v1;
				}else{
					$r[$k1]=$v1;
				}			
			}
		}
		return $r;	
	}
	print_r(arr_merge($arr1,$arr2,$arr3));


	

?>