<?php	
	echo __LINE__;//输出当前行号
	echo "<hr>";
	echo __FILE__;//当前文件路径
	echo "<hr>";
	echo __DIR__;//当前文件所在的文件夹
	echo "<hr>";
	function write(){
		echo __FUNCTION__;//当前函数的函数名
	}	
	write();

	print_r($_SERVER);
?>