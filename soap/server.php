<?php  
	include_once("./MyClass.php");
/*
	$server = new SoapServer("./MyClass.xml");
	$server -> setClass("MyClass");
	$server->addFunction('sub'); 
	$server -> handle();

*/
 
$server = new SoapServer(null,array("uri"=>"TestWebService","location"=>"http://127.0.0.1/soap/server.php"));
$server -> setClass("MyClass");
$server -> handle();
//服务端完成
?>