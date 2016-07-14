<?php
    include './SoapDiscovery.class.php';//引入工具类
    include './Person.class.php';//引入需要描述（翻译）的文件

    //SoapDiscovery(类名称,WSDL命名空间,服务端地址)
    $wsdl=new SoapDiscovery('Person','Person','http://192.168.34.29/webservices/server.php');
    $wsdl=$wsdl->getWSDL();//生成wsdl文件   
?>