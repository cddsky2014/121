<?php
	$arr = array(
		"name"=>"xiaoming",
		"age"=>23,
		"sex"=>"girl"
	);
	echo json_encode($arr);

	$json = '{"name":"xiaoming","age":23,"sex":"girl"}';
	print_r(json_decode($json,true));

	


?>