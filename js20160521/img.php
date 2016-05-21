<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>选择图片</title>
</head>
<body>	
	<div style="width:400px;font-size:0px;" class="show_img">
		<img id="bigimg" src="./img/4.jpg" alt="">
		<img id="smallimg" onmousemove="change();" width="100px" src="./img/1.jpg" alt="">
		<img width="100px" src="./img/2.jpg" alt="">
		<img width="100px" src="./img/3.jpg" alt="">
		<img width="100px" src="./img/4.jpg" alt="">	
	</div>

	<script>
	//onmousemove 鼠标移动事件 

	//bigimg==document.getElementById("bigimg");
	
	var change = function(){
		var src = smallimg.getAttribute("src");
		bigimg.setAttribute("src",src);
	}
	
	</script>
	
</body>
</html>