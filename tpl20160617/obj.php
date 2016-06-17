<?php

class Str{
	public $string = '';	
	public function a($a){
		$this->string .= $a;		
		return $this;		
	}
	public function b($b){
		$this->string .= $b;		
		return $this;	
	}
	public function c($c){
		$this->string .= $c;		
		return $this;
	}
}
function M($obj){
	return $$obj = new Str;
}
echo M('str')->a('a')->b('b')->c('c')->string;//$str
/*
$str->a('a');//a
$str->b('b');
echo $str->c('c');
echo $str->a('a')->b('b')->c('c');//abc
*/
//$str->a('a')==$str;
//var_dump($str->a('a')->d());
//$str->a('a')->b('b')->c('c');
//echo $str->string;