net start 服务名> 开启服务  wampmysqld
net stop 服务名>关闭服务


mysql -u 用户名 -p 密码

show databases; 显示数据库文件
create database 库名; 创建数据库
drop database 库名; 删除数据库


创建表
	create table 表名( 字段名 类型(长度) 字段约束1 字段约束2 字段约束3, ... )engine=innodb default charset=utf8;
删除表 drop table 表名;


<?php
	$users = array(
		array("name"=>"唐长老","age"=90),
		array("name"=>"唐长老","age"=90),
		array("name"=>"唐长老","age"=90),
		array("name"=>"唐长老","age"=90),
		array("name"=>"唐长老","age"=90),
	);

?>

create table users(uname varchar(200),age int(3),height float(4,2),intro text,birth date);


值类型:

	int: 取值范围 -2^31 - +2^31-1
	smallint:取值范围-127 - +128
	bigint

	float|double:浮点型 带小数点
	   float(4,2) 数据长度是四位，小数点2位  99.99

	binary:二进制 011011011111000 (数值|图片)

	字符型:
		varchar：可变长字符类型
		char:设置的字段长度比较准确	
		
		varchar(200)
		char(200)
		区别：
			varchar更加节省空间
			char存储效率更高（读写速度）
		text:文本类型,不需要设置字符长度
		
	日期型：
		date: 2010-10-10 date()
		datetime: 2010-10-10 12:12:12 datetime()
		注意：不需要设置字符长度

		实际存储日期，一般使用int(13)

字段约束(属性):
	not null|null:是否为空
	auto_increment:字段中的值自增(自动增,每次加1)
	注意:一个表中一般自增只有一个,类型是整形;
	default 值:给某个字段设置默认值（如果字段值填充的时候没有填充，都是显示默认值)
	primary key 


表约束:用来限制(设置)整个表数据内容规则

	engine:数据库存储引擎(数据库在硬盘中的存储方式)
		Myisam:mysql数据库默认的 不支持事务、运行速度快
		Innodb :支持事务，但是查询速度比myisam要慢些,存储数据的容量要大;
	default charset=UTF8|gb2312|gbk：

学生表
	create table students (sid int(8) not null primary key auto_increment,sname varchar(200) not null,phone char(11) not null,sex int(1) default 3 not null,birth int(12) not null,intro text,height float(4,2) not null)engine=innodb default charset=utf8
家长表
	create table parents (pid int(8) not null primary key auto_increment,pname varchar(100) not null,sex int(1) default 2,sid int(8) not null )engine=innodb default charset=utf8