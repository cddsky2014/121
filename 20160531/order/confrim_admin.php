<?php
include("./link.php");
$oid = $_GET["oid"];

mysql_query("update ts_orders set status=2 where oid='{$oid}'");

header("location:./order_admin.php");

?>