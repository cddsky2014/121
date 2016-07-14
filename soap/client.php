<?php
//$soap = new SoapClient('http://127.0.0.1/soap/MyClass.xml',array('trace'=>true));
$soap = new SoapClient(null,array("uri"=>"TestWebService","location"=>"http://127.0.0.1/soap/server.php"));

	print_r($soap->__getFunctions());

	header("content-type:text/html;charset=utf-8");
	// 普通调用
	//echo $soap->getMin("heihei");
	echo $soap->add();
	
	
	// 使用$soap对象__soapCall()方法调用
	echo $soap->__soapCall("add",array());

	

?>