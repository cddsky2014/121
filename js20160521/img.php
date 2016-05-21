<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>选择图片</title>
</head>
<body>	
	<div style="width:400px;font-size:0px;" class="show_img">
		<img id="bigimg" src="./img/4.jpg" alt="">
		<img onmousemove="change(this);" width="100px" src="./img/1.jpg" alt="">
		<img onmousemove="change(this);" width="100px" src="./img/2.jpg" alt="">
		<img onmousemove="change(this);" width="100px" src="./img/3.jpg" alt="">
		<img onclick="change(this);" width="100px" src="./img/4.jpg" alt="">
	</div>
	<script>
	var change = function(th){
		//console.log(th);
		var src = th.src;
		bigimg.src=src;
	}
	</script>
	
</body>
</html>