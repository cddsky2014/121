<?php
include("./link.php");

foreach($_POST as $k=>$v){
	$sql = "update ts_config set cfgvalue='{$v}' where cfgname_en='{$k}'";

	mysql_query($sql);
}
header("location:./admin_config.php");






?>