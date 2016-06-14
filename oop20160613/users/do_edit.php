<?php
include('../DB.php');
$db = new DB;
print_r($_GET);
print_r($_POST);
$uid = $_GET['uid'];
$data = array(
    'uname' => $_POST['uname'],
    'email' => $_POST['email'],
    'tel' => $_POST['tel'],
);

$db->edit('ts_users',$data,"uid='{$uid}'");
header('location:./users.php');