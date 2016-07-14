<?php
//$soap = new Tool();
$url = 'http://192.168.34.29/server/Tool.xml';
 $soap = new SoapClient($url,array('tarce'=>true));

  print_r($soap->__getFunctions());// 输出当前可调用的所有方法

    //header("content-type:text/html;charset=utf-8");

	echo $soap->add(1,2);  
	//echo $soap->__soapCall('say',array());

    // 使用$soap对象__soapCall()方法调用
	//echo $soap->add(1,2);
  //echo $soap->__soapCall("add",array(1,2));