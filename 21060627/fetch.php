<?php

$pdo = new PDO('mysql:dbname=advmysql;host=127.0.0.1;charset=utf8','root','');

//$sth = $pdo->query('select * from students');

$sth = $pdo->prepare('select * from students');
$sth->execute();

print_r($sth->fetchColumn(1));

print_r($sth->fetchColumn(1));

