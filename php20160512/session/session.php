<?php
	session_start();//开启session功能,之前不能有任何输出 fopen();
	/*
		session的生存周期：网站打开->网站关闭
		session_destroy()销毁$_SESSION 用于网站注销功能
		session_save_path():设置session的文件路径
		session_id():返回的session的id-用户唯一的标示符
		session_name():返回的是sessionid的名称
		unset();	
	*/

	$_SESSION["name"]="tom";//写文件
	$_SESSION["age"]="12";//写文件

	//echo session_id();
	//echo session_save_path();//realpath()
	//echo session_name();	
	//session_destroy();//unset($_SESSION);

	unset($_SESSION["name"]);

	print_r($_SESSION);
	
	



?>