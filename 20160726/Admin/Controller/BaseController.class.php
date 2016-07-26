<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	
	public function isLogin($key='uname'){

		return session("?{$key}");
	
	}

	public function hello(){

		echo 'hello';
	
	}




	

}