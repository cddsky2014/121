<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<div id="d1">
	<b>我是粗体</b>
</div>

<script>
var d1 = document.getElementById("d1");
//console.log(d1.innerHTML);
d1.innerHTML="abcd";
d1.style="color:red;background-color:green;";

/*
var document = {
	"write":function(string){return string;},
	"createElement":function(tag){return element;},
	"getElementById":function(id){return element;},
	"getElementsByClassName":function(class){return element;},
	"getElementsByTagName":function(tag){return element;},
};
var element = {
	"style":"css..."//读取和设置CSS
	"innerHTML":"<b>hello</b>"//保存元素的内容<p><b>hello</b></p>
	"appendChild":function(element){}
	"removeChild":function(element){}
	"setAttribute":function(name,value){}
	"getAttribute":function(name){return value}
};
*/



</script>
	
</body>
</html>