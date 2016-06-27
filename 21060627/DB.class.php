<?php

class DB{
	private $pdo=null;
	public $table='';
	public function __construct($dsn,$uname,$pwd){
		$this->pdo = new PDO($dsn,$uname,$pwd);
	}
	public function query($fileds='*',$condition='1=1'){
		$sql = sprintf('select %s from %s where %s',$fileds,$this->table,$condition);
		$sth = $this->pdo->query($sql);
		return $sth->fetchAll(2);
	}	
}

function M($table){
	$db = new DB('mysql:dbname=advmysql;host=127.0.0.1;charset=utf8','root','');
	$db->table = $table;
	return $db;
}
//print_r($db->query('students'));
print_r(M('students')->query('sname'));
