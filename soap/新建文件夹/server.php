<?php  
include_once("./WebService.class.php");

$server = new SoapServer("WebService.wsdl");
$server -> setClass("WebService");
$server -> handle();
?>