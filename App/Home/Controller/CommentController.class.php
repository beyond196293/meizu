<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends CommonController {
	public function insert(){
		if(!$_GET['count']) $this->ajaxReturn(0);
		$_GET['time']=time();
		$where['uid']=$_GET['uid'];
		$where['gid']=$_GET['gid'];
		$com=D('Comment');
		$id=$com->field('id')->where($where)->find();
		if(!$id){
			$res=$com->add($_GET);
			if($res){
				$this->ajaxReturn(1);
			}else{
				$this->ajaxReturn(0);
			}
		}else{
			$res=$com->where($id)->save($_GET);
			if($res){
				$this->ajaxReturn(1);
			}else{
				$this->ajaxReturn(0);
			}
		}
	}
}
