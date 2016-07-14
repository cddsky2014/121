<?php  
$client = new SoapClient("./WebService.wsdl");//也可以指定为WebService.wsdl文件
try{  
    echo $client -> getTest();
}catch(SoapFault $e){
    echo $e -> getMessage();
}

?>