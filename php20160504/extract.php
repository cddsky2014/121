<?php
$arr1 = array("name"=>"lucy","age"=>23,"addr"=>"USA");
//echo extract($arr);
//echo $age;//自定义
function uectract($arr){
	$i=0;
	foreach($arr as $k=>$v){
		global $$k;
		$$k=$v;
		$i++;
	}
	return $i;
}
echo uectract($arr1);
echo $name;



?>