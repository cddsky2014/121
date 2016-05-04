<?php
/*
	array_slice
	array_splice
*/
$arr = array(1,2,3,4,5,6,7);
print_r($arr);
//print_r(array_slice($arr,-5,-1));
print_r(array_splice($arr,1,3,array("a","b","c")));
print_r($arr);


?>