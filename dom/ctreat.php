<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body id="b1">

<div id="d2"></div>

<!--
	document.createElement("input") 
	<input type="">
-->
<div id="d1">

</div>

<p id="p1">sss
</p>

<a id="a1" href="http://www.baidu.com" target="_blank">百度</a>

<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>


<script>
console.log(a1.getAttribute("href"));
a1.setAttribute("href","http://www.qq.com");
a1.setAttribute("title","http://www.qq.com");


/*创建元素节点*/
	var input = document.createElement("input");
	d1.appendChild(input);//给父节点添加子节点
	input.setAttribute("type","text");//设置属性
	input.setAttribute("value","用户名");//设置属性
	console.log(input.nodeType);
	console.log(input.nodeName);
	console.log(input.nodeValue);

/*创建文本节点*/
	var text = document.createTextNode("文本内容");
	console.log(text.nodeType);
	console.log(text.nodeName);
	console.log(text.nodeValue);
	p1.appendChild(text);

/*创建注释节点*/
	var comment = document.createComment("我是注释");
	d2.appendChild(comment);
	console.log(comment.nodeType);
	console.log(comment.nodeName);
	console.log(comment.nodeValue);
/*删除子节点*/	
//b1.removeChild(p1);
//document.getElementById("b1").removeChild(p1);

//console.log(b1);

//console.log(document.getElementById("b1"));

console.log($("#p1").text("sdsdsds"));
console.log($("#a1").attr("href","http://www.sina.com.cn"));




</script>
	
</body>
</html>