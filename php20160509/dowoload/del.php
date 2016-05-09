<?php
header("content-type:text/html;charset=utf-8");
$filename = iconv("utf-8","gbk",$_GET["name"]);//获取数据

$res = unlink("./downfile/$filename");//操作数据
if($res==true){//返回结果
	echo "删除成功!<a href='./showfile.php'>返回</a>";
}else{
	echo "删除失败!<a href='./showfile.php'>返回</a>";
}
?>