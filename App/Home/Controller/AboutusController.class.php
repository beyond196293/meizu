<?php
namespace Home\Controller;
use Think\Controller;
class AboutusController extends CommonController {
	public function callwe(){
		$this->display();
	}
	public function law(){
		$this->display();
	}
	public function meizhi(){
		$this->display();
	}
	public function feedback(){
		$this->display('Aboutus/feedback');
	}
	public function feedback0(){
		//dump($_POST);exit;
		$time=date('Y-m-d H:i:s');
		$Aboutus=D('Aboutus');
		$_POST['time']=$time;
		//dump($_POST);exit;
		$res=$Aboutus->add($_POST);
		$this->display('Aboutus/feedback0');
	}
	public function first(){
		$this->display('Index/index');
	}
}
