<?php
header("content-type:text/html;charset=utf-8");
session_start();

session_destroy();

echo "注销成功<a href='./home.php'>返回首页</a>";

?>
