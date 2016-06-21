<?php
namespace Application\Demo\Controller; 
use Think\Controller;

class Index extends Controller{

	public function start(){
		echo $time = time();
		echo "<hr>";
	
		$this->smarty->display('a.html','abcdefg');
	}

	public function a(){
		echo time();
		echo "<hr>";
		$this->smarty->display('a.html','aaaa');
	}

	public function b(){
		echo time();
		echo "<hr>";
		$this->smarty->display('b.html','bbbb');
	}
	public function c(){
		echo time();
		echo "<hr>";		
		$this->smarty->display('c.html');
		$this->smarty->clearCache('c.html');
	}
	

	
	

}