<?php
/*
	fopen();
	操作文件 读取文件
	fcolse();
*/

$f=fopen("./file.txt","r");//打开文件，返回文件资源
/*
	fgetc($f)逐字读取文件内容
*/
echo fgetc($f);//a  ->b
echo fgetc($f);//b  ->c
echo fgetc($f);//c  ->d
echo fgetc($f);//d  ->e
echo fgetc($f);//e  ->f
echo fgetc($f);//f  ->g
echo fgetc($f);//g  ->null
var_dump(fgetc($f));
fclose($f);



?>