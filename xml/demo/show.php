<?php

$dom = new DOMDocument("1.0","utf-8");
$dom->load('./admins1.xml');
$xml = $dom->documentElement;

//	var_dump($xml->childNodes);
foreach($xml->childNodes as $vo){
	//echo $vo->nodeValue;
	//echo $vo->nodeName;
	echo $vo->nodeType;

	echo '<hr>';
}