<?php
session_start();//开启session功能

	$_SESSION["name"]="jack";
	echo $_SESSION["name"];	
	session_destroy();//unlink();
?>