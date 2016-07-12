<?php
$conn = mysql_connect('localhost', 'root', 'yourpassword')or die(mysql_error());
mysql_select_db('transaction', $conn);
mysql_query('set names utf8');
//创建事务
mysql_query('START TRANSACTION') or die(mysql_error());
$sqlA = "update A set account=account-1";
if (!mysql_query($sqlA)){
mysql_query('ROLLBACK') or exit(mysql_error()); //判断当执行失败时回滚
exit();
}
$sqlB = "update B set account=account+1";
if (!mysql_query($sqlB)){
mysql_query('ROLLBACK') or exit(mysql_error()); //判断当执行失败时回滚
exit();
}
mysql_query('COMMIT')or die(mysql_error()); //执行事务
mysql_close($conn);
?>