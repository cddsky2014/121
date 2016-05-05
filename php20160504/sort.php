<?php
	
	$arr = array(9=>4,10=>1,1=>5,11=>2,8=>7,6,9);

	/*
		sort 对数组值升序排序，会重新索引,对数组有影响
		rsort 对数组值降序排序，会重新索引
		ksort 对数组的键名升序排序
		krsort 对数组的键名降序排序
	*/

	print_r($arr);
	//print_r(sort($arr));
	//print_r(rsort($arr));
	//print_r(ksort($arr));
	print_r(krsort($arr));

	print_r($arr);


?>