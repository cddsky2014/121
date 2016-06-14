<?php
class Guojing{
    const SEX='boy';
    public $name='郭靖';
    public $country='南宋';    
    public function XianglongZhang(){
        echo '降龙十八掌';        
    }    
    public function YiyangZhi(){
        echo '一阳指';        
    }
}
$gj = new Guojing;
echo $gj->name;
echo '<hr>';
$gj2= clone $gj;//new Guojing;
$gj2->name='南宋郭靖';
echo $gj2->name;
echo '<hr>';
echo $gj->name;

