<?php
	/*
		fgetss逐行读取，会删除html和php标签
	*/
	$f = fopen("./file.txt","r");

	while($str=fgetss($f)){
		echo $str;
	}

	fclose($f);
?>