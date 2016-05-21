<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>windows</title>
</head>
<body>

<table border=1>
	<tr>
		<td>编号</td>
		<td>姓名</td>
		<td>年龄</td>
		<td>操作</td>
	</tr>	
	<tr>
		<td>2</td>
		<td>李链接</td>
		<td>34</td>
		<td><a href="./del.php?id=2">删除</a></td>
	</tr>
	<tr>
		<td>1</td>
		<td>李小龙</td>
		<td>34</td>
		<td><input type="button" onclick="del(1);" value="删除"></td>
	</tr>
	<tr>
		<td>3</td>
		<td>成龙</td>
		<td>34</td>
		<td><input type="button" onclick="del(3);" value="删除"></td>
	</tr>
</table>

<a href="http://www.baidu.com" target="qq">baidu</a>
<script>
var del = function(id){
	if(confirm("确定删除？")==true){
		location.href="./del.php?id="+id;
	}
}
/*
var window = {
	"onload":function(){}
	"write":function(){}
	"alert":function(){}
	"setTimeout":function(){}
	"setInterval":function(){}
	"documnet":{
		"write":function(){}
	}
	"location":{
		"href":"http://www.baidu.com"
	}
}*/
//window.alert("abc");

/*
	window.confirm("提示信息")询问对话框
确认框,点击确定返回的true,点击取消返回的false

if(confirm("确定删除？")==true){
	console.log("删除成功");
}else{
	console.log("取消成功");
}
*/
//页面跳转 header("location:http://www.baidu.com");
//location.href="http://www.baidu.com";

//window.prompt 输入对话框

//console.log(prompt("芝麻开门："));


//win.close();

var openWin = function(name){
	window.win = open("http://www.qq.com",name);
}
var closeWin = function(){
	window.win.close();
}

</script>
<input type="button" value="open" onclick="openWin('baidu');">
<input type="button" value="close" onclick="closeWin();">


</body>
</html>