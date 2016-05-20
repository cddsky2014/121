<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>事件</title>
</head>
<body>
	<input onclick="fun();" id="btn" type="button" value="点我">
	<p id="p1">我是一个p元素</p>
<script>
	/*
		绑定事件的两种方式：
			标签属性绑定：<标签 事件属性="执行代码;">
			对象绑定：对象.事件属性=执行代码;
		事件属性
			onclick 单击事件
		
	*/
	var fun = function(){
		alert("点我干嘛！");
	};
	
	//var btn=document.getElementById("btn");
	var p1=document.getElementById("p1");
	p1.onclick=function(){
		alert("点我干嘛！");
	};

</script>
	
</body>
</html>