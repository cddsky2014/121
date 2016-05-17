查
	select 字段名,字段名...[*] from 表名;

增
	insert into 表名(字段名1,字段名2....) values(值1,值2),(值1,值2),(值1,值2)...;

		- 字段名和字段值一一对应
		- 所有的字段值建议都加引号
		insert into students (sname,tel,sex)	values("jack","18012344445","1");
 
		insert into students (sname,tel,sex)	values("lili","18012344445","1");

		insert into students(sname,tel,sex) values("rose","88888","0"),("toms","99999","1"),("smith","66666","1");

另一种插入数据的方法：
	insert into 表名 set 字段名=值,字段名=值...;
		insert into students set sname="xiaoming",sex="1",tel="6665544";

删
	delete from 表名 where 字段名 条件判断 判断值;

	delete from students where sid=8;

改
	update 表名 set 字段名=值,... where 字段=值...

	update students set intro="我是一个坏人" where sid=7;
	> 大于
	< 小于
	!=或<> 不等于

	比较运算符：> < != <= >= <> 
	逻辑运算符：and(并且)， or（或）， || && 

	函数运算符：between n and m(包含边界，相当于 >=n and <=m)，in(在某个范围之内)，not in
	
- 模糊查询like:如果只根据字符串中某些字符来查询结果集，那么就要使用模糊查询：
	_表示任何一个字符 like"_栖霞_"

	% 表示任意字符任意个
	select * from students where name like "%好人%"


分组和统计:
	group by 字段1,字段2... having 条件
		聚合函数用来修饰字段，写在前面:
		count():统计每个分组中的记录条数
select sex,count(age) from students group by sex;
		sum()：统计每个分组中的记录和
select sex,sum(age) from students group by sex;
		max(): 统计每个分组中字段的最大的记录
select sex,max(age) from students group by sex;
		min(): 统计每个分组中字段的最小的记录
select sex,min(age) from students group by sex;
		avg(): 统计每个分组中字段值的总平均数
select sex,avg(age) from students group by sex;