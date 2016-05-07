<?php
	/*
		- `readfile(filename)`函数是用来读入一个文件并把它输出到缓存中，如果出现错误则返回false。
		- `file(filename)` 读取整个文件的内容，只是file()函数是将文件内容放到数组中，以段落区分数组元素，失败返回false. 返回的是数组  数组元素是根据换行符来分的,空格不分  
		- `file_get_contents("filename")` 该函数将文件读入到一个字符串中
	*/

readfile("http://www.baidu.com/index.php");
print_r(file("./file.txt"));
echo file_get_contents("http://www.qq.com");

?>