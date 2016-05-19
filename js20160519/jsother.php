<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>js</title>
</head>
<body>
	<script>
	/*
		var name1="3";
		var name2=1;
		var name3=2;
		document.write("name1");
	*/

	//$arr = array(1,2,3,array("a","b","c"));
	//arr[]=4;不支持
	var arr = [1,2,3];
	arr[0]="jack";	
	//document.write(arr[0]);
	var arr = [1,2,3,["a","b","c"]];
	//document.write("<br>");
	//document.write(arr[3][2]);
	//伪关联数组
	//$arr = array("name"=>"lucy","age"=>23);
	var arr = {"name":"lucy","age":23};//json
	document.write(arr["name"]);
	document.write(arr.name);
	var arr = {"name":"jack","hobby":{"music":"音乐","sport":"运动"}};
	document.write(arr["hobby"]["sport"]);
	document.write(arr.hobby.sport);	
	// 混合定义
	var arr = [1,2,3,{"name":"lucy","hobby":["美术","绘画"]}];
	//arr[3]["name"];//arr[3].name;
	arr[3]["hobby"][1];//arr[3].hobby[1];
	


	</script>

	<?php
		$arr = array("name"=>"lucy","age"=>23);
		echo json_encode($arr);	
	?>
	
</body>
</html>