<?php
session_start();
include './Verify.class.php';

$verifycode = $_POST['verifycode'];

$verify =  new Core\Verify;

var_dump($verify->check($verifycode));
