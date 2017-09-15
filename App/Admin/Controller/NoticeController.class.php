<?php
namespace Admin\Controller;
use Think\Controller;
class NoticeController extends Controller {
        public function notice(){
            $notice=D('Notice');
            $total=$notice->count();
            $page=new \Think\Page($total,6);
			$page->setConfig('prev',上一页);
			$page->setConfig('next',下一页);
            $noticelist=$notice->limit($page->firstRow.','.$page->listRows)->getAll();
            $pagebutton=$page->show();
            //dump($pagebutton);
            $this->assign('pagebutton',$pagebutton);
            $this->assign('noticelist',$noticelist);
            $this->display();
        }
        public function noticeadd(){
            if(IS_POST){
                //dump($_POST);
                $notice=D('Notice');
                $_POST['time']=time();
                $res=$notice->add($_POST);
                if($res){
                    $this->success('添加成功','Notice/notice');
                }else{
                    $this->error('添加失败');    
                }
            }else{
                $this->display();
            }
        }
        public function noticeup(){
            $notice=D('Notice');
            if(!IS_POST){
            $id=$_GET['id'];
            //dump($_POST);
            $info=$notice->find($id);
            $this->assign('info',$info);
            $this->display();
            }else{
            $id=$_POST['id'];
            $info=$notice->find($id);
            if($_POST['content']==$info['content']){
            $this->error('没做任何修改');
            }
            //$_POST['time']=time();
            $res=$notice->save($_POST);
            if($res){
            $this->success('修改成功','Notice/notice');
            }else{
            $this->success('修改失败');
            }
        }
    }

        public function del(){
            //dump($_GET);
            $id=$_GET['id'];
            $notice=D('Notice');
            $res=$notice->delete($id);
            if($res){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }
        }
    }





