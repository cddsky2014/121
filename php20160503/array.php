<?php
header("content-type:text/html;charset:utf-8");
/*
	数据类型：
		string 字符串
		int 整型
		float 浮点型（小数）
		bool 布尔
		null 空类型
			function add(){
				return 1;
			}
			var_dump(add());//null

		array 
*/
/*
	定义：
		$变量名=array(键名=>值,键名=>值,键名=>值,...);
	访问：
		$变量名[键名（下标）]
*/

$name="lucy";
$age=23;
$sex=true;
$money=6666.00;

/*
	索引数组：下标全部为数字的数组
*/
//$info = array(0=>"lucy",1=>23,2=>false,3=>6666.00);
$info = array("lucy",23,false,6666.00);
//echo $info[2];
/*
	关联数组：下标不全部为数字的数组
*/
$info = array("name"=>"lucy","age"=>23,"sex"=>true,"monney"=>6666.00);
//echo $info["age"];

/*
	1、直接定义赋值
		注意：
		1、如果数组下标为数字的可以省略不写，系统会根据当前元素之前最大下标值累加
		2、相同下标的数组元素互相覆盖（后面覆盖前面）
	
	访问：
		echo $变量名[键名|下标]
	赋值：
		$变量名[键名|下标]=值
		注意：下标可以省略不写（系统会根据当前元素之前最大下标值累加）
*/



$arr1 = array(10=>1,2,3,4,5);
//var_dump($arr1);
$arr1[4]="hello";
//给数组增加值
//$arr1[7]="world";
$arr1[]="world";

//print_r($arr1);
//echo $arr1[3];

/*
	2、先定义后赋值
*/
$arr2 = array();

$arr2[0]=3;
$arr2[10]=3;
$arr2[]=3;
$arr2[3]=3;
$arr2[]=3;
print_r($arr2);




?>