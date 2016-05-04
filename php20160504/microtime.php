<?php
/*
	microtime 获取微秒
*/

$start = microtime(true);
for($i=0;$i<=100;$i++){
}
$end = microtime(true);

//echo $end-$start;

//echo strtotime("2015/11/11");

echo date("Y-m-d",strtotime("-1 year"));

?>