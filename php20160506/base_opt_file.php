<?php
/*
	copy() 复制
*/
	//copy("./demo.txt","../demo.txt");

/*
	rename()重命名（剪切移动）
*/
	//rename('./demo.txt','./demo_hello.txt');
	//rename('./demo.txt','../demo_heloo.txt');
/*
	unlink() 删除
*/
	//unlink("./demo2.txt");

/*
	- 文件的大小
	- `filesize("filename")`   取得文件的大小  返回其大小（byte）

	- `realpath("filename")` 返回文件的绝对路径(盘符绝对路径)  

	- `stat("filename")` 返回一个数组，数组元素是文件的相关信息，包括文件大小、最后的修改时间等
	- `fileatime("filename")`上次访问时间
	- `filemtime("filename")`上次修改时间 
	- `filectime("filename")`上次改变时间
*/

echo "文件大小：". filesize("./demo4.txt")."<br>";

echo "文件路径：".realpath("./demo4.txt")."<br>";
echo "上次访问时间：".fileatime("./demo4.txt")."<br>";

echo "上次修改时间：".filemtime("./demo4.txt")."<br>";

echo "上次改变时间：".date("Y-m-d H:i:s",filectime("./demo4.txt"))."<br>";

echo "<hr>";

/*
	is_file():判断某个文件是否存在，返回true|false
	is_dir() 文件夹（目录），返回true|false
	file_exists():判断某个文件或者目录是否存在，返回true|false
*/

var_dump(is_file("demo4.txt"));//true
var_dump(is_dir("./demo4.txt"));//false
var_dump(is_dir("./abc"));//true
var_dump(file_exists("demo4.txt"));//true
var_dump(file_exists("./abc"));//true


?>