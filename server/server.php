<?php  
    include_once("./Tool.class.php");

    $server = new SoapServer("./Tool.xml");
    $server -> setClass('Tool');
    $server -> handle();
