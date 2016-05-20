<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>settimeout</title>
</head>
<body>

<script>
/*
	var t = setTimeout(函数名,时间):过多长时间调用一次函数,返回的是个时间句柄
	clearTimeout(t):清除设置好的时间句柄-动画控制就释放了

*/
var fun = function(){
	document.write("5秒后执行");
};
var t = setTimeout(fun,5000);
clearTimeout(t);
//console.log(typeof(t));
/*
	var t = setInterval(函数,时间)每隔多长时间执行一次，重复不断的执行 
	clearInterval(t):释放设置动画控制
*/
var t = setInterval(fun,2000);
clearInterval(t);

</script>
	
</body>
</html>