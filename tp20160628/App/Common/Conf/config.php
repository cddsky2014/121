<?php
return array(
	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'thinkshop', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'ts_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  false, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
	'TMPL_ENGINE_TYPE'=>'Smarty',

	'ACTION_SUFFIX' => 'Action', // 操作方法后缀
);