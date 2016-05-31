<?php
session_start();
echo $pid=$_GET["pid"];

unset($_SESSION["car"][$pid]);

echo "删除成功";

?>