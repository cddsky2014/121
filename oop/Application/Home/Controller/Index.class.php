<?php
namespace Application\Home\Controller;

use \Think\Controller;

class Index extends Controller{

	public function showUsers(){		
		
		$res = M('ts_users')->query();
		
		$this->smarty->assign('res',$res);

		$this->smarty->display('showUsers.html');
		
	}

	public function verify(){
		$this->verify->codeSet='012345';
		$this->verify->entry();
	}
}
