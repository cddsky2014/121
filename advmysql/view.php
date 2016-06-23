<?php
$link = @mysql_connect('127.0.0.1','root','');

mysql_select_db('advmysql');

mysql_query('set names utf8');


$res = mysql_query('select * from abc ');

print_r(mysql_fetch_assoc($res));
