<?php
/*
中文名：洪七
别  名：北丐 
国  籍：南宋 
民  族：汉 
出  生：1164年 
逝  世：1243年 
年  龄：79岁
职  业：丐帮第十八代帮主 
爱  好：酒、叫花鸡、武功秘籍
技  能：降龙十八掌，打狗棒
 */
//class 类名{....}
class Hongqi{
    public  $name = '洪七';
    public  $nick = '北丐';
    public  $country = '北宋';
    public  $birth = '1164年';
    public  $die = '1243年';
    public  $age = 79;
    public  $job = '丐帮第十八代帮主';  
    public  $hoddy = array('酒','叫花鸡','武功秘籍');
    public function xianglongZhang(){
        echo '降龙十八掌';
    }
    public function hitdogBang(){
        echo '打狗棒';
    }
}
//new 类名；类的实例化
$hq = new Hongqi;//对象object
echo $hq->name;//echo $name;
echo $hq->age;//echo $age;
var_dump($hq);
var_dump(is_object($hq));




