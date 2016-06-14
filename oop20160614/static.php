<?php
class Guoxiaotian{
    const SEX='boy';    
    //public $sex = 'boy';    
    static public $sex = 'boy';    
    public $country = '宋';
    public $enemy = '段天德、完颜洪烈';
    static public function kungfu(){
        self::$sex;
        echo '啸转天地';
    }
}
echo Guoxiaotian::SEX;
$gxt = new Guoxiaotian;
//echo $gxt->sex;
Guoxiaotian::$sex='male';
echo Guoxiaotian::$sex;
Guoxiaotian::kungfu();
