<?php
namespace Admin\Controller;
class PassController extends CommonController {
  
	public function pass(){
		//dump($_SESSION['admin']);
		$this->assign('name',$_SESSION['admin']['name']);
		$this->display('pass');
    }
	public function index(){
		//dump($_POST);
		if(md5($_POST['mpass'])!=$_SESSION['admin']['password']){
			$this->error('您的原始密码不正确');
		}else{
			if($_POST['newpass']){
				//$pass['password']=$_POST['newpass'];
				$user=D('User');
				$user->password=md5($_POST['newpass']);
				$list=$user->where('name='."'".$_SESSION['admin']['name']."'")->save();
				if($list){	
					//unset($_SESSION['admin']);
					$this->success('修改成功！');
					//$this->redirect('Admin/Index/index');
					
				}else{
					$this->error('修改失败！');
				}
			}
			
		}
		
		
	}
}