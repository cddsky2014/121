<?php
	$arr = array(
		1,2,3,4,
		array("a","b","c")
	);
	
	//echo count($arr);
	//echo count($arr[4]);	
	//自定义函数实现数组元素个数统计
	function ucount($arr){
		$i=0;
		foreach($arr as $v){
			$i++;
		}
		return $i;
	}
	$arr2 = array(4,5,6,7,8,9,4,6,7);
	echo ucount($arr2);
?>