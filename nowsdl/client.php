<?php
//$soap = new Tool();
$opt=array(
	'uri'=>'nowsdl',
	'location'=>'http://192.168.34.29/nowsdl/server.php',
	'trace'=>true
);
$soap = new SoapClient(null,$opt);
//$soap = new SoapClient(null,array('tarce'=>true));
//print_r($soap->__getFunctions());// 输出当前可调用的所有方法

echo $soap->add(1,11);
