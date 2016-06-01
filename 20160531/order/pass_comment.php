<?php
include("./link.php");
$comid = $_GET["comid"];
$sql = "update ts_comment set status=2 where comid='{$comid}'";

mysql_query($sql);

header("location:./admin_comment.php");
?>