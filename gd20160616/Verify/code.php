<?php
session_start();
include './Verify.class.php';

$verify =  new Core\Verify;

$verify->fontSize = 14;
$verify->length = 3;
$verify->useNoise = true;
$verify->useCurve=false;
$verify->codeSet = '0123456789'; 
$verify->entry();