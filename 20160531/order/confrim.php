<?php
include("./link.php");
$oid = $_GET["oid"];

mysql_query("update ts_orders set status=3 where oid='{$oid}'");

header("location:./order.php");

?>