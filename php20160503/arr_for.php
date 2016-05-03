<?php
/*
	数组遍历
		for
		foreach

	foreach($数组 as $k键名下标=>$v值){}
*/
$arr1 = array("lucy",23,"girl","南京",8888.00,1,2,3);
/*
echo $arr1[0];
echo $arr1[1];
echo $arr1[2];
echo $arr1[3];
echo $arr1[4];

for($i=0;$i<=4;$i++){
	echo $arr1[$i];	
}
*/
foreach($arr1 as $k=>$v){
	echo $k;
	echo $v;
}
for($i=0;$i<=4;$i++){
	$k=$i;
	$v=$arr1[$i];
	echo $k;
	echo $v;
}



?>