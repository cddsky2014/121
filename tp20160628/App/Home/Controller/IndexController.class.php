<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		//$res = M('admins')->select();

		//$res =  M('admins')->where('uid=22')->fetchSql(true)->select();
		
		//$res  =M('admins')->getField('uname,email,tel',',');
		//echo $res;
		//dump($res);		
		$map = [
			'uid'=>['gt',20],
			'uname'=>['like','%x%'],
			'_logic'=>'or'
		];
		$map2 = [
			'_complex'=>$map,
			'tel'=>['like','189%'],
			'_logic'=>'and'
		];

		echo $res = M('admins')->where($map2)->fetchSql(true)->select();
		//$res = M('admins')->where('uid>20')->select();
		exit;
	
		$this->assign('res',$res);
		$this->display('a');
    }

	public function add(){
		/*
			?m=Home&c=Index&a=add
			/Home/Index/add
		*/
		$data = array(
			'uname'=>'rose',
			'tel'=>123456,
			'email'=>'rose@qq.com'
		);
		//M('admins')->add($data);
		M('admins')->data($data)->add();
	}

	public function save(){
		$data = array(
			'uid'=>26,
			'uname'=>'rose',
			'tel'=>123456678,
			'email'=>'rose@qq.com'
		);
		M('admins')->save($data);
	}

	public function del(){
		M('admins')->where('')->delete();
	}


	public function showAdmins(){
		
		$res = M('admins')->select();

		$this->assign('admins',$res);

		$this->display();
	}

	public function edit(){
		$uid = I('get.uid');		
		$res = M('admins')->where("uid='{$uid}'")->find();
		$this->assign('admin',$res);
		$this->display();
	}

	public function doEdit(){
		//dump(I('post.'));
		//M('admins')->save(I('post.'));
		/*
		$data = [
			'uid'=>I('post.uid')	
		];
		M('admins')->data($data)->save();*/
		//M('admins')->where('uname="rose"')->data(I('post.'))->save();
		
		$admins = M('admins');

		$data = [
			'uname'=>'lili2',
			'tel'=>123456
		];		
		//$admins->create($data );
		$admins->where('uid=22')->save($data);
		
	}

	public function createUrl(){
		
		//Index/add
		//echo U('Index/add','id=3&p=1','');
		//echo U('Index/add',array('id'=>3,'p'=>1),'');
		echo U('Admin/Index/add',['id'=>3,'p'=>1],'');
		//echo U('Index/index?id=3');

	}

	//添加
	public function addAdmin(){		

		$this->display();
	}

	//处理添加
	public function doAddAdmin(){			
		if(M('admins')->data(I('post.'))->add()){
			$this->success('添加成功','/Index/showAdmins',2);
			//$this->redirect('Index/showAdmins', '', 5, '添加成功,页面跳转中...');
		}else{
			//$this->error('添加失败','Index/showAdmins',3);
		}
	}

	public function su(){
		$this->success('添加成功','/Index/showAdmins',2);
	}



}