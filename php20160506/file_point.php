<?php
	$f = fopen("./demo.txt","r");
	
	/*
		SEEK_SET 以开始位置作为参照物
		SEEK_CUR 以当前位置作为参照物
		SEEK_END 以尾部作为参照物
	*/
	//abcdefg
	fseek($f,2);//移动当前指针的位置
	fseek($f,3,SEEK_CUR);
	fseek($f,-2,SEEK_END);
	echo ftell($f);//2 获取当前指针所在位置	
	echo fgetc($f);//c 获取当前指针指向的字符
	
	fclose($f);
?>