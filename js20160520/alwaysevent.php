<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>常用事件</title>
</head>
<body>
<div  id="d1">
我是一个div标签
</div>

<input onselect="fun2();" type="text" id="in1">

<script>
var fun2 = function(){
	console.log("选择事件");
};
//ondblclick
var d1 = document.getElementById("d1");
//d1.ondblclick=function(){alert("我是一个div标签2");};
//onmouseover 鼠标移入事件
//onmouseout 鼠标移出事件
//d1.onmouseover=function(){alert("移入事件");};
//d1.onmouseout=function(){alert("移出事件");};
//onkeydown 键盘被按下事件
var in1 = document.getElementById("in1");
//in1.onkeydown=function(){console.log("键盘被按下事件");};	
//onkeypress 键盘被按住事件
var in1 = document.getElementById("in1");
//in1.onkeypress=function(){console.log("键盘被按住事件");};
//onkeyup 键盘弹起事件
var in1 = document.getElementById("in1");
//in1.onkeyup=function(){console.log("键盘弹起事件");};
//in1.onblur=function(){console.log("失去焦点");};
//in1.onfocus=function(){console.log("获得焦点");};
in1.onchange=function(){console.log("改变事件");};


/*
常用事件简介：
	onload:页面加载事件 页面加载完成后第一个执行的动作,只有窗口有这个事件 window.onload = function(){}
	onmouseover 鼠标移入事件
	onmouseout 鼠标移出事件
	onmousemove 鼠标移动事件 鼠标在标签内每移动一个像素，就会触发一次该事件
	onclick 点击鼠标左键事件(单击)
	ondblclick 鼠标双击事件 （onmousedown 鼠标键按下 onmouseup 鼠标键释放）
	onfocus 得到焦点事件 选中文本框并可以输入
	onblur 失去焦点事件
	onkeydown 键盘被按下事件
	onkeypress 键盘被按住事件
	onkeyup 键盘弹起事件
	onsubmit 表单提交事件 可以防止数据提交不成功时丢失
	onreset 重置表单事件，当点击<input type=”reset”>时触发
	onselect 选择改变，文本框中的文字被选择时
	onchange 改变事件--标签内的内容被改变且失去焦点后触发的事件（文本框内容改变或者下拉列表框重新选择）

*/




</script>
	
</body>
</html>