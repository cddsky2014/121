<?php
	$file_arr = scandir("./root");
	unset($file_arr[0]);//删除数组元素或变量
	unset($file_arr[1]);
	print_r($file_arr);	
	//------------------
	$file_arr = array_slice($file_arr,2);
	$file_arr = array_splice($file_arr,2);
	print_r($file_arr);
	//--------------
	$new_arr = array();
	foreach($file_arr as $v){
		if($v=="." || $v==".."){continue;}
		$new_arr[]=$v;
	}
	print_r($new_arr);	
	
?>