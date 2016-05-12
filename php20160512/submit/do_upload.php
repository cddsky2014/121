<?php
header("content-type:text/html;charset=utf-8");

//print_r($_POST);

if(isset($_POST["sub"])==false){
	exit("非法提交");
	//header("location:./upload.php");
}

///echo $_POST["uname"];


?>