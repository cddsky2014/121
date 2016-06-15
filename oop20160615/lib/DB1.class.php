<?php
/*
 * 1、一个文件内只定义一个类
 * 2、类名和文件名一致
 * 3、文件名格式“文件名.class.php”
 *  */

 // lib文件下Db文件里的Db类
namespace lib\DB1;
class abc {
    public function __construct() {
        echo __CLASS__;
    }

    public function query(){
         echo __FUNCTION__;        
    }
}
