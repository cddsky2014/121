<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {

	public  function __construct(){	
		parent::__construct();

		if(!$this->isLogin()){
			$this->error("请先登陆",U("Admin/Index/login"));
		}
	}
	
	public function isLogin($key='uname'){

		return session("?{$key}");
	
	}

	public function productList(){
		echo "productList";
	} 


	public function productAdd(){
		echo "productAdd";
	} 


}