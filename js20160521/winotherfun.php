<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<input type="button" value="<后退" onclick="history.back();">
<input type="button" value="前进>" onclick="history.forward();">

<input type="button" value="<后退go" onclick="history.go(-1);">
<input type="button" value="前进go>" onclick="history.go(1);">
<input type="button" value="刷新" onclick="history.go(0);">
<input type="button" value="刷新" onclick="location.reload();">

<script>
/*
	历史对象 window.history

	history.back():后退到上一个页面
	history.forward():进入到下一个页面，此页面必须被浏览过
	history.go():
	正值：前进
	负值：后退
*/




</script>
	
</body>
</html>