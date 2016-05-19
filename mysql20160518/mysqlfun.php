<?php
	include("./link.php");

	$sql = "";

	$res = mysql_query("select * from students");

	/*
		mysql_affected_rows()
	*/
	//echo mysql_affected_rows();
	echo mysql_insert_id();
	var_dump($res);
	
?>