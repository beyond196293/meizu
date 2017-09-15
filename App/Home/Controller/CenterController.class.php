<?php
namespace Home\Controller;
use Think\Controller;
class CenterController extends CommonController {
    public function index(){
        $id=$_SESSION['home']['id'];
        //dump($id);
        $info=D('Info');
        $head=D('Head');
        $notice=D('Notice');
        $res=$info->where('uid='.$id)->find();
        $image=$head->where('user_id='.$id)->find();
        $content=$notice->limit(3)->getAll();
        //dump($content);
        //dump($image);
        $this->assign('content',$content);
        $this->assign('image',$image);
        $this->assign('res',$res);
        $this->display();
        }
    public function edit(){
        //dump($_POST);
        if(empty($_POST['password']))$this->error('没有修改密码');
        if($_POST['password']!==$_POST['repass']){
            $this->error('两次输入的密码不一致');
        }
        $id=$_SESSION['home']['id'];
        $user=D('User');
        $data['password']=MD5($_POST['password']);
        $res=$user->where('id='.$id)->save($data);
        if($res){
        $this->success('修改成功',U('index'));
        }else{
        $this->error('修改失败');
        }
    }
    public function info(){
        $id=$_SESSION['home']['id'];
        $info=D('Info');
        $res=$info->where('uid='.$id)->find();
        if($res){
            $result=$info->where('uid='.$id)->save($_POST);
            if($result){
                $this->success('修改成功',U('center/index'));
            }else{
                $this->error('修改失败');
            }
        }else{
            $_POST['uid']=$id;
            $result=$info->add($_POST);
            if($result){
                $this->success('添加成功',U('center/index'));
            }else{
                $this->error('添加失败');
            }
        }
    }
    public function head(){
        $id=$_SESSION['home']['id'];
        $head=D('head');
        $result=$head->where('user_id='.$id)->find();
        if($result){
            $head->where('user_id='.$id)->delete();
            $upload=new \Think\Upload();// 实例化上传类  
            $upload->maxSize=3145728 ;// 设置附件上传大小   
            $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
            $upload->savePath=''; 
            $upload->rootPath='./Public/Uploads/'; // 设置附件上传目录    // 上传文件   
            $info=$upload->upload();
        	//dump($info);
            $pram['name']=$info['file']['savepath'].$info['file']['savename'];
    	    $pram['user_id']=$id;
        	//$head=D('Head');
    	    $res=$head->add($pram);
    	    if($res){
    		    $this->success('修改成功',U('index'));
    	    }else{
    		    $this->error('修改失败');
    	    }
            }else{
		    $upload=new \Think\Upload();// 实例化上传类  
		    $upload->maxSize=3145728 ;// 设置附件上传大小   
		    $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
		    $upload->savePath=''; 
		    $upload->rootPath='./Public/Uploads/'; // 设置附件上传目录    // 上传文件   
		    $info=$upload->upload();
		    //dump($info);
		    $pram['name']=$info['file']['savepath'].$info['file']['savename'];
			$pram['user_id']=$id;
			//$head=D('Head');
			$res=$head->add($pram);
			if($res){
				$this->success('修改成功',U('index'));
			}else{
				$this->error('修改失败');
			}
        
    	}
    }
}
