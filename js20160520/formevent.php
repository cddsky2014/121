<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body >


	<form action="" onreset="alert('重置')" onsubmit="alert('提交事件');">
		<input id="in1" type="text">
		<input type="submit" value="提交">
		<input type="reset" value="重置">
	</form>
<script>
window.onload=function(){
	var in1 = document.getElementById("in1");
	console.log(in1);
};	
</script>	
</body>
</html>