<?php  
    include_once("./Tool.class.php");

	$opt=array(
		'uri'=>'nowsdl',
		'location'=>'http://192.168.34.29/nowsdl/server.php',
	);
	$server = new SoapServer(null,$opt);

    //$server = new SoapServer("./Tool.xml");
    $server -> setClass('Tool');
    $server -> handle();
