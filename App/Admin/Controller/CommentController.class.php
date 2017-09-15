<?php
namespace Admin\Controller;
use Think\Controller;
class CommentController extends Controller {
    	public function comment(){
    		$com=D('Comment');
    		$goods=D('Goods');
    		$user=D('User');
			$count=$com->where('mask=0')->count();
			$page=new \Think\Page($count,5);
			$page->setConfig('prev',上一页);
			$page->setConfig('next',下一页);
    		$res=$com->field('u.name uname,g.name gname,c.time,c.count,c.id cid')->table('mz_user u,mz_goods g,mz_comment c')->where('c.uid=u.id and c.gid=g.id and c.mask=0')->limit($page->firstRow.','.$page->listRows)->getTime();
			$show=$page->show();
    		$this->assign('comlist',$res);
    		$this->assign('page',$show);
	    	$this->display('comment');
    	}
    	public function recom(){
    		//dump($_POST);
    		$_POST['mask']=1;
    		$goods=D('Goods');
    		$user=D('User');
    		$com=D('Comment');
    		$cres=$com->save($_POST);
    		if($cres){
    			$res=$com->field('u.name uname,g.name gname,c.time,c.count,c.recount')->table('mz_user u,mz_goods g,mz_comment c')->where('c.uid=u.id and c.gid=g.id and c.mask=1')->getTime();
    		}
    		$this->assign('comlist',$res);
    		$this->display('recomment');
    	}
    	public function recomment(){
    		$goods=D('Goods');
    		$user=D('User');
    		$com=D('Comment');
			$count=$com->where('mask=1')->count();
			$page=new \Think\Page($count,5);
			$page->setConfig('prev',上一页);
			$page->setConfig('next',下一页);
    		$res=$com->field('u.name uname,g.name gname,c.time,c.count,c.recount')->table('mz_user u,mz_goods g,mz_comment c')->where('c.uid=u.id and c.gid=g.id and c.mask=1')->limit($page->firstRow.','.$page->listRows)->getTime();
    		$show=$page->show();
    		$this->assign('page',$show);
			$this->assign('comlist',$res);
    		$this->display('recomment');
    	}

}