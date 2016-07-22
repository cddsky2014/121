<?php
$memcache = new Memcache;             //创建一个memcache对象


$memcache->connect('localhost', 11211) or die ("链接失败"); //连接Memcached服务器


//select 结构 20
if(($age = $memcache->get('age'))==false){
	//重新从数据库取值
	$memcache->set('age', 20);  
}
      //设置一个变量到内存中，名称是key 值是test

echo $memcache->get('age');   //从内存中取出key的值

?>