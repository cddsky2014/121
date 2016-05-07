<?php
	/*
		w 只写模式
		1.如果文件不存在，那么创建文件打开
		2.如果文件存在，那么清空文件内容打开
		3.每次写入都会清空以前文件
	*/

	/*
	$f=fopen("./demo.txt","w");	
	//fwrite($f,"hello niu");
	fwrite($f,"hello niu2");	
	*/

	/*
		r+ 读写模式
		1.文件必须存在
		2.不会清空源文件内容，以复写（插入）的形式写入内容
	
	$f=fopen("./demo.txt","r+");
	//echo fgetss($f);
	fwrite($f,"abcdefg");
	
	*/
	/*
		w+ 读写模式
		a 以只写追加方式打开
		a+ 以读写追加方式打开
	*/
	//$f = fopen("./demo2.txt","w+");
	//fwrite($f,"abc");
	//echo fgets($f);
	//$f = fopen("./demo2.txt","a");
	$f = fopen("./demo2.txt","a+");
	fwrite($f,"abc");
	echo fgets($f);
	fclose($f);
?>