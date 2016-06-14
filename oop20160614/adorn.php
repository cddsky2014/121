<?php
/*
    public 公共的
    private 私有的
    protected 受保护的
 */
class Guoxiaotian{
    public $country = '宋';
    protected $enemy = '段天德、完颜洪烈';
    private $age = 44;
    public function kungfu(){
        echo '啸转天地';
    }
    public function get(){
        echo $this->age;  
        echo $this->enemy; 
    }
}
$gxt = new Guoxiaotian;
//echo $gxt->country;//宋
//echo $gxt->get();//
class Guojing extends Guoxiaotian{
        
}
$gj = new Guojing;
//echo $gj->enemy;
echo $gj->get();

/*          
    修饰符      本类    子类    对象
    public      yes     yes     yes
    private     yes     no      no 
    protected   yes     yes     no    
 */