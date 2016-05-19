<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>作用域</title>
</head>
<body>

<script>
/*
	所有定义在函数外部的变量，都叫全局变量
*/
var a=123;//全局变量	
function fun1(){
	a=456;
	document.write(a);
}
fun1();
document.write(a);
/*
	局部变量:定义在函数内部的变量
*/
function fun2(){
	var b = "abc";
	document.write(b);
}
fun2();
/*
	局部变量转全局变量（避免这样使用）
	注意：第一次定义变量必须要加 var
*/
function fun3(){
	var x="hello";
	y="lili";
}
fun3();
//document.write(x);
document.write(y);




</script>
	
</body>
</html>