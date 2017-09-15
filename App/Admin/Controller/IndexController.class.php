<?php
namespace Admin\Controller;
//use Think\Controller;
class IndexController extends CommonController {
    public function index(){
		//dump($_SESSION['admin']);
		$this->assign('session',$_SESSION['admin']);
		$this->display();
		
    }
    
}