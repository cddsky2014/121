<?php

	/*
		fgets 逐段读取内容
	*/

	$f = fopen("./file.txt","r");

	//echo fgets($f);

	while($str= fgets($f)){	
		echo $str;	
	}

	fclose($f);

?>