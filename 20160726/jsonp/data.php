<?php

$jsoncallback =  $_GET ['abc'];
$data = 'abc';
echo $jsoncallback."({$data})";
?>