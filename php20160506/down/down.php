<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件下载</title>
</head>
<body>

	<?php

		$url = "http://e.hiphotos.baidu.com/image/pic/item/b219ebc4b74543a9de656fcc1c178a82b90114b7.jpg";
		ob_start();
		readfile($url);
		$file = ob_get_contents();
		ob_clean();

		//获取文件名
		$url_arr = explode("/",$url);
		$file_name = end($url_arr);
		
		file_put_contents("./$file_name",$file);
	
	?>
	
</body>
</html>