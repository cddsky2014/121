<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>function</title>
</head>
<body>
<script>
/*
	函数定义（传参规则以PHP为准）
*/
function add(num1,num2=2){
	//var num1=1;
	//var num2=2;
	var num3 = num1+num2;
	return num3;
}
document.write(add(1));
//数字，字符串，对象，数组类型，function类型
/*
	1.js中的函数是一种和数字、字符串一样的数据类型
	2.函数可以当一般的值在各个变量中传递或赋值
*/
var fun=function(a=1,b=2){
	return a+b;
};
fun();
var a=123;
var fun2 = function(){
	document.write("hello");
};
//匿名函数
(function(){
	document.write("hello3333");
	var fun3 = function(){
		document.write("hello444");
	};
	fun3();
})();






//fun2();




</script>
	
	
	
</body>
</html>