<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>array</title>
</head>
<body>

<script>
	//arr.sort() 对数组的元素进行排序
	//toString() 把数组转换为字符串，并返回结果
	//pop() 删除并返回数组的最后一个元素
	//arr.join(",") 把数组的所有元素放入一个字符串。元素通过指定的分隔符进行分隔。
	//默认以逗号相连,并且无法自定义
	var arr = new Array(1,2,3);
	var arr = [1,2,3,2,10,3,7,4];
	/*
	arr={
		"length":8
		"sort":function(){}
	}*/
	//document.write(arr.sort());
	//document.write(arr.toString());
	document.write(arr.pop());
	document.write("<br>");	
	document.write(arr);

	document.write(arr.length);
	

</script>
	
</body>
</html>