<?php
include('../DB.php');
$db = new DB;
$uid = $_GET['uid'];
$db->del('ts_users',"uid='{$uid}'");
header('location:./users.php');
