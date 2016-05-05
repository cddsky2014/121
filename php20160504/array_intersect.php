<?php
	/*
		array_intersect取和第二个数组相同部分的元素
		array_intersect_key
			
	*/
	$arr1 = array(1,2,3,4,6);
	$arr2 = array(4,6);

	//print_r(array_intersect($arr1,$arr2));
	print_r(array_intersect_key($arr1,$arr2));

?>