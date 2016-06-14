<?php

abstract class Guoxiaotian{
    static $enemy = '段天德、完颜洪烈';
    const ENEMY = '完颜洪烈';
    abstract public function revenge();
}

class Guojing extends Guoxiaotian{
        public function revenge(){
                echo parent::ENEMY;
        }
}
$gj = new Guojing;
echo $gj->revenge();
