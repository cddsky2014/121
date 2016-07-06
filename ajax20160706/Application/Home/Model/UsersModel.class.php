<?php
namespace Home\Model;
use Think\Model;
class UsersModel extends Model {

	protected $_validate = array(

		array('uname','require','必须填写用户名'),
		array('uname','/^[A-Za-z]\w{5,11}$/','用户名不合法',0,'regex'),
		array('uname','','帐号名称已经存在',0,'unique',1),
		array('pwd','require','必须填写密码'),
		array('pwd2','pwd','两次密码输入不一致',0,'confirm'),
		array('email','require','必须填写邮箱'),
		array('email','email','邮箱不合法'),
		array('tel','/^(1(([35][0-9])|(47)|[8][0126789]))\d{8}$/','手机不合法',2,'regex'),
   );

    protected $_auto = array ( 
         array('status','1'),  // 新增的时候把status字段设置为1
         array('pwd','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理

         array('mtime','time',2,'function'), // 对update_time字段在更新的时候写入当前时间戳
         array('ctime','time',1,'function'), // 对update_time字段在更新的时候写入当前时间戳
     );

}