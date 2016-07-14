<?php  
    include_once("./Person.class.php");

    $server = new SoapServer("./Person.xml");
    $server -> setClass("Person");
    $server -> handle();
