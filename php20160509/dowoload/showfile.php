<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>已下载</title>
</head>
<body>
	<?php
		/*
			1、获取数据
			2、加工数据
			3、展示数据
		*/
		
		//获取当前目录下的所有文件
		$files = scandir("./downfile/");	
		$files = array_slice($files,2);	//删除 . 和 ..
	?>


	<form action="./down.php" method="post">
		URL: <input type="url" name="url">
		<input type="submit" value="下载">
	</form>


	<table border=1>
		<tr>
			<td>文件名</td><td>操作</td>
		</tr>
		<?php foreach($files as $v){
			$filename = iconv("gbk","utf-8",$v);
		?>
		<tr>
			<td><?php echo $filename?></td>
			<td><a href="./del.php?name=<?php echo $filename;?>">删除</a></td>
		</tr>
		<?php }?>
	</table>
	
</body>
</html>