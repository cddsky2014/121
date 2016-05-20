<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>创建添加删除节点</title>
</head>
<body>

<div id="d1">
	<b id="b1">加粗</b>
</div>
<script>
/*
	1.创建(选中)节点（子节点） document.createElement("input")	
	2.选中父节点
	3.节点的追加（删除）: 父节点.appendChild(子节点)
*/
 var input = document.createElement("input");//子节点
 //input = {"setAttribute":function(){}}
 //obj.setAttribute("属性名","值"):给某个元素节点对象设置属性值
 input.setAttribute("type","password");
 input.setAttribute("name","pwd");
 //console.log(div.getAttribute("id"));

 var div = document.getElementById("d1");//父节点
 var b = document.getElementById("b1");
div.appendChild(input);

//DOM节点的删除 父节点.removeChild(子节点);
div.removeChild(b);



//console.log(input);
</script>
	
</body>
</html>