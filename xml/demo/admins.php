<?php
header('Content-type:text/xml');

@mysql_connect('127.0.0.1','root','');

mysql_select_db('tpshop');

mysql_query('set names utf8');

$sql = "select * from tp_admins";

$res =  mysql_query($sql);

$rows = array();

while($row = mysql_fetch_assoc($res)){
	$rows[] = $row;
}

$dom = new DOMDocument("1.0","utf-8");//设定文档类型

$RECORDS = $dom->createElement('RECORDS');//创建节点标签

//-------------
foreach($rows as $v){

	$RECORD = $dom->createElement('RECORD');//创建节点标签

	$aid = $dom->createElement('aid');//创建节点标签
	$aname = $dom->createElement('aname');//创建节点标签
	$email = $dom->createElement('email');//创建节点标签
	$tel = $dom->createElement('tel');//创建节点标签
	$pwd = $dom->createElement('pwd');//创建节点标签

	$aid_text = $dom->createTextNode($v['aid']);
	$aname_text = $dom->createTextNode($v['aname']);
	$email_text = $dom->createTextNode($v['email']);
	$tel_text = $dom->createTextNode($v['tel']);
	$pwd_text = $dom->createTextNode($v['pwd']);
	
	$aid->appendChild($aid_text);
	$aname->appendChild($aname_text);
	$email->appendChild($email_text);
	$tel->appendChild($tel_text);
	$pwd->appendChild($pwd_text);


	$RECORD->appendChild($aid);
	$RECORD->appendChild($aname);
	$RECORD->appendChild($email);
	$RECORD->appendChild($tel);
	$RECORD->appendChild($pwd);

	$RECORDS->appendChild($RECORD);
}
//--------------

$dom->appendChild($RECORDS);

$dom->save('./admins1.xml');//生成并保存XML文件

?>