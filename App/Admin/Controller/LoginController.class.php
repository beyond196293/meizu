<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    	public function Login(){
			if(IS_POST){
				$verify = new \Think\Verify();   
				$result =$verify->check($_POST['code']);
				if(!$result)$this->error('验证码错误');
				$user=D('User');
				//dump($_POST['name']);exit;
				$name=$_POST['name'];
				$password=$_POST['password'];
				$code=$_POST['code'];
				//dump($user->where('name'.$name));exit;
				//$info=$user->select();
				$info=$user->where("name='{$name}'")->find();
				//echo  $user->getLastSql();
				//dump($info);exit;
				if($info['role']==0){
					$this->error('该用户不存在');
				}
				if($info){
					if($info['password']==md5($password)){
						$_SESSION['admin']=$info;
						//dump($_SESSION['admin']);exit;
						$this->redirect('Index/index');
					}else{
						$this->error('您的用户名或密码不正确!!');
					}
				}else{
					$this->error('您的用户名或密码不正确！');
				}
			}else{
				$this->display('login');
			}
			
		}
		public function yzm(){

    	//$Verify = new \Think\Verify();$Verify->entry();
    	//$config =    array(    
    	//'fontSize'    =>    30,    // 验证码字体大小    
    	//'length'      =>    3,     // 验证码位数    
    	//'useNoise'    =>    false, // 关闭验证码杂点);
		//$Verify =     new \Think\Verify($config);
		//$Verify->entry();
            $Verify =     new \Think\Verify();
            $Verify->fontSize = 30;
            $Verify->length   = 3;
            $Verify->useNoise = false;
            $Verify->entry();
		}
}