<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>for..in..</title>
</head>
<body>

<script>
/*
	数组的遍历循环
*/
	var arr = ["a",2,3,4,5];
	for(var i=0;i<5;i++){
		//document.write(arr[i]);		
	}

	//foreach($arr as $k=>$v){}
	var arr = {"name":"lucy","age":20}
	for( var i in arr){
		document.write(arr[i]);
	}
	
</script>
	
</body>
</html>