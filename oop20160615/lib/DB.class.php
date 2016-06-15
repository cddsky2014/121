<?php
/*
 * 1、一个文件内只定义一个类
 * 2、类名和文件名一致
 * 3、文件名格式“文件名.class.php”
 *  */

 // lib文件下Db文件里的Db类
namespace lib\DB;
class DB {
    public function __construct() {
        echo __CLASS__;
    }

    public function query(){
         echo __FUNCTION__;        
    }
}


http://127.0.0.1/admin.php?c=admins&a=index
http://127.0.0.1/admin.php?c=admins&a=add