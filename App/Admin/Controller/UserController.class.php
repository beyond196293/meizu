<?php
namespace Admin\Controller;
class UserController extends CommonController {
  

    	public function user(){
			$user=D('User');
			$total=$user->count();
			$page=new \Think\Page($total,5);
			$page->setConfig('prev',上一页);
			$page->setConfig('next',下一页);
			$userlist=$user->limit($page->firstRow.','.$page->listRows)->getAll();
            $pageButton=$page->show();
			$this->assign('list',$userlist);
			$this->assign('pageButton',$pageButton);
            $this->display('user');
			
    
        }
        public function add(){
			if(IS_POST){
				$user=D('User');
				$_POST['date']=time();
				$info=$user->create();
				if($info){
					//dump($_POST);exit;
					$user->add();
					$this->redirect('User/user');
				}else{
					$this->error($user->getError());
				}
				
			}else{
				$this->display('add');
			}
            
        }
		public function edit(){
			if(IS_POST){
				$user=D('user');
				$id=$_POST['id'];
				//dump($id);exit;
				$info=$user->create();
				unset($info['password']);
				//dump($info);exit;
				if(!$info){
					$this->error($user->getError());
				}else{
					$user->where('id='.$id)->save($info);
					$this->redirect('user');
				}
			}else{
				$id=$_GET['id'];
				$user=D('User');
				$userlist=$user->find($id);
				//dump($userlist);
				$this->assign('list',$userlist);
				$this->display('edit');
			}
			
		}
		//详细信息
		public function detail(){
			$uid=$_GET['id'];
			$user=D('Info');
			$username=D('User');
			$address=D('Address');
			$uname=$username->where('id='.$uid)->find();
			$list=$user->where('uid='.$uid)->find();
			$add=$address->where('uid='.$uid)->select();
			//dump($add);exit;
			$this->assign('uname',$uname);
			$this->assign('list',$list);
			$this->assign('address',$add);
			$this->display('detail');
		}
		public function info(){

			$this->display('info');

    
		}
		public function back(){
			$user=D('User');
			$total=$user->count();
			$page=new \Think\Page($total,5);
			$page->setConfig('prev',上一页);
			$page->setConfig('next',下一页);
			$userlist=$user->limit($page->firstRow.','.$page->listRows)->getAll();
            $pageButton=$page->show();
			$this->assign('list',$userlist);
			$this->assign('pageButton',$pageButton);
            $this->display('user');
		}
}
