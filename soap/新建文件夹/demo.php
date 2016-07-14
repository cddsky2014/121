<?php  
include_once("./SoapDiscovery.class.php");  
include_once("./WebService.class.php");

/*
*    @param string 类名称
*    @param string WSDL命名空间自定义
*    @param string WebService url 我们刚刚修改的类文件属性address    
*/
$wsdl = new SoapDiscovery("WebService","WebService","http://127.0.0.1/soap/server.php");
$wsdl = $wsdl -> getWSDL();

var_dump($wsdl);

?>