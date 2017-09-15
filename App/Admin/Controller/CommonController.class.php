<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function _initialize(){
		if(empty($_SESSION['admin'])) $this->redirect('Login/login');
		//细致的权限处理
		//管理员的权限
		$arr=array(
					'Index/index',
					'User/info',
					'User/index',
					'User/add',
					'User/user',
					'User/detail',
					'User/back',
					'Goods/index',
					'Goods/add',
					'Adv/adv',
					'Adv/add_data',
					'Pass/pass',
					'Pass/index',
		);
		//echo CONTROLLER_NAME; 
		$role = CONTROLLER_NAME. '/' .ACTION_NAME;
		//echo $role;
		if($_SESSION['admin']['role']==1){
			if(!in_array($role,$arr)){
				$this->error('权限不足');
				$this->redirect('Index/index');
			}
		}

	}
}