<?
/*
	date.timezone = Asia/Shanghai
	date.timezone =Asia/Chongqing
	date.timezone =Asia/Urumqi
	date.timezone =Asia/Hong_Kong
	date.timezone = PRC （People's Republic of China）
*/
//echo date_default_timezone_get();//获取当前时区
date_default_timezone_set("PRC");//设置当前时区
//echo date("Y-m-d H:i:s");
echo ini_get("log_errors_max_len");
//ini_set("log_errors_max_len",2048);

?>

