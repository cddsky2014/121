<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dom</title>

	<style>

		div{}/*document.getElementsByTagName*/
		.d1{}/*document.getElementsByClassName*/
		#d2{}/*document.getElementById("d2")*/
		
	</style>
</head>
<body>
<div class="d1" id="d2"></div>
<p id="p1" class="d1"></p>
<div></div>


<script>

/*
DOM节点的生成/创建：动态的生成HTML标签或者文本document
	元素节点创建document.createElement("li")返回的是个元素节点对象<input type=”text” name=”user”>
	文本节点 document.createTextNode("文本内容") 返回的是文本节点对象
	添加属性节点 obj.setAttribute("属性名","值"):给某个元素节点对象设置属性值
	节点的追加: 父节点.appendChild(子节点)
*/

//getElementById 通过id属性获取元素对象
console.log(document.getElementById("p1"));
//console.log(document.getElementsByClassName("d1"));
//console.log(document.getElementsByTagName("div"));

//{}//json 伪关联数组





</script>
	
</body>
</html>