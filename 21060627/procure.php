<?php
$link = @mysql_connect('127.0.0.1','root','');
mysql_select_db('advmysql');
mysql_query('set names utf8');

$res = mysql_query('call p_query_users(11)');

print_r(mysql_fetch_assoc($res));
/*
CREATE PROCEDURE p_query_users(in userid int(8))

BEGIN
	SELECT * FROM users where uid=userid;
END
*/