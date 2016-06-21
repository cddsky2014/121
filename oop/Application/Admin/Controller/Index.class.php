<?php
namespace Application\Admin\Controller;

use Think\Controller;

class Index extends Controller{
	public function addGoods(){
		$this->smarty->display('addGoods.html');
	}

	public function doAddGoods(){
		//print_r($_FILES);

		$this->upload->upload();

	}


}