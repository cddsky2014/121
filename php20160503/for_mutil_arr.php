<?php

/*
	for($i=0;$i<=2;$i++){

		for($j=0;$j<=2;$j++){
			echo $arr1[$i][$j];
		}	
	}
	*/
	$arr1 = array(
		array(1,2,4),
		array("a","b","c",1,3,4,5),
		array(7,8,9),	
		array(7,8,9)	
	);
	//$arr1 = array(1,2,3);		
	foreach($arr1 as $k=>$v){
		//1.$v=array(1,2,4);
		//2.array("a","b","c");
		//print_r($v);
		foreach($v as $k1=>$v1){
			echo $v1;
		}	
	}
	
	echo "<hr>";

	$arr2 = array(1,2,array("a","b","c"),array(7,8,9),4,"heloo");

	foreach($arr2 as $k=>$v){
		//判断当前$v是否是数组
		if(is_array($v)==true){
			foreach($v as $v1){
				echo $v1;
			}
		}else{
			echo $v;
		}		
	}

	echo "<hr>";

	$arr3 = array(
		"name"=>"lucy",
		"age"=>23,
		"sex"=>"girl",
		3,
		"helloo",
		array(1,2,3)
	);	
	foreach($arr3 as $k=>$v){
		echo $v;	
	}

	echo "<hr>";


//---------------------------------

$arr = array(1,2,4,"age"=>23,"hobby"=>array("sing","paly","sport"));

$arr["tile"]="yahoo";
$arr[]=23;
$arr[100]="lucy";
$arr[]=array(4,5,6);
$arr[101][]=array("a","b","c");
$arr[101][3][]=array(7,8,9);

print_r($arr);












?>