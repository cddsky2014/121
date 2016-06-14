<?php
class Guoxiaotian{
    public function __construct() {
        echo 'Guoxiaotian';
    }
    public $country = '宋';
    public $enemy = '段天德、完颜洪烈';
    public $age = 44;
    public function kungfu(){
        echo '啸转天地';
    }
}
//子类继承父类
class Guojing extends Guoxiaotian{
    public function __construct() {
        parent::__construct();
        echo 'Guojing';
    }
    public $age = 18;//重写父类属性
    public function kungfu(){//重写父类方法
        //parent::方法|属性 访问父类中的属性和方法
        parent::kungfu();//echo '啸转天地';
        echo '降龙十八掌';
    }    
}
$gj = new Guojing;
echo $gj->age;
$gj->kungfu();
