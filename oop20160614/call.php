<?php

/*
  多态
 */

class Person {
    /*
      public function wujingSay($param1){
      echo '大师兄不好了'.$param1.'被妖怪抓走了';
      }
      public function wujingSay($param1,$param2){
      echo '大师兄不好了'.$param1.'和'.$param2.'被妖怪抓走了';
      }
      public function wujingSay($param1,$param2,$param3){
      echo '放心吧是否，大师兄回来救我们的！';
      }
     */

    public function __call($name, $arguments) {
        if ($name == 'wujingSay') {
            $count = count($arguments);
            if ($count == 1) {
                echo '大师兄不好了' . $arguments[0] . '被妖怪抓走了';
            } elseif ($count == 2) {
                echo '大师兄不好了' . $arguments[0] . '和' . $arguments[1] . '被妖怪抓走了';
            } else {
                echo '放心吧是否，大师兄回来救我们的！';
            }
        }else{
            echo '此方法不存在！';
        }
    }

}

$p = new Person;
//$p->say(1,2,3,4);
$p->wujingSay('师傅');
//$p->wujingSay('师傅', '二师兄');
//$p->wujingSay('师傅', '二师兄', '沙悟净');

/*
    类的定义
    类的实例化（对象）
    成员访问和赋值    
    继承
    __construct()
    __get() __set()
    __autoload()
*/
