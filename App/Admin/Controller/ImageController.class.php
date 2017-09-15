<?php
namespace Admin\Controller;
use Think\Controller;
class ImageController extends Controller {
	public function index(){
		$gid=$_GET['gid'];
		$img=D('Image');
		$ginfo=D('Ginfo');
		$where=[];
		$where['goods_id']=$gid;
		$imglist=$img->where($where)->getAll();
		$infolist=$ginfo->where($where)->select();
        foreach($infolist as $key=>$val){
            $infolist[$key]['name']=ltrim(strstr($val['name'],'/'),'/');
        }
		$this->assign('imglist',$imglist);
		$this->assign('infolist',$infolist);
		$this->assign('gid',$gid);
		$this->display('image');
	}
	//添加商品预览图
	public function add(){
        $upload=new \Think\Upload();// 实例化上传类  
        $upload->maxSize=3145728 ;// 设置附件上传大小   
        $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
        $upload->savePath=''; 
        $upload->rootPath='./Public/Uploads/'; // 设置附件上传目录    // 上传文件   
        $info=$upload->upload();
        if(!$info){
        	$this->error($upload->getError());
        }
        //拼装添加商品数据
        $pram=[];
		$pram['name']=$info['file']['savepath'].$info['file']['savename'];
    	$pram['goods_id']=$_GET['gid'];
    	$pram['is_face']=0;
    	$image=D('image');
    	$res=$image->add($pram);
    	if($res){
    		$this->success('添加成功',U('Image/index?gid='.$_GET['gid']));
    	}else{
    		$this->error('添加失败',U('Image/add'));
    	}
    }
	public function del(){
		$del=D('Image');
		$id=$_GET['id'];
        $img=$del->find($id);
        $name=$img['name'];
        @unlink('./Public/Uploads/'.$name);
        $res=$del->delete($id);
        if($res){
            $this->ajaxReturn(1);
        }
	}
	public function addinfo(){
		//dump($_GET);exit;
        $upload=new \Think\Upload();// 实例化上传类  
        $upload->maxSize=3145728 ;// 设置附件上传大小   
        $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
        $upload->savePath=''; 
        $upload->rootPath='./Public/Uploads/'; // 设置附件上传目录    // 上传文件   
        $info=$upload->upload();
        if($info){
        	$image=new \Think\Image();
	        $image->open('./Public/Uploads/'.$info['img']['savepath'].$info['img']['savename']);
	        $image->thumb(300, 200,\Think\Image::IMAGE_THUMB_CENTER)->save('./Public/Uploads/300/'.$info['img']['savename']);
	        //var_dump($info);exit;
        }else{
        	// 上传错误提示错误信息     
           $this->error($upload->getError());    
        }
        //拼装添加商品数据
        $pra=[];
		$pra['name']=$info['img']['savepath'].$info['img']['savename'];
    	$pra['goods_id']=$_GET['gid'];
    	$image=D('ginfo');
    	$res=$image->add($pra);
    	if($res){
    		$this->success('添加成功',U('Image/index?gid='.$_GET['gid']));
    	}else{
    		$this->error('添加失败',U('Image/add'));
    	}
    }
    //删除信息图
    public function dinfo(){
        $del=D('Ginfo');
        $id=$_GET['id'];
        $img=$del->find($id);
        $name=$img['name'];
        @unlink('./Public/Uploads/'.$name);
        $mname=substr($name,10);
        @unlink('./Public/Uploads/300'.$mname);
        $res=$del->delete($id);
        if($res){
            $this->ajaxReturn(1);
        }
    }
    //设置封面
    public function face(){
    	$id=$_GET['id'];
    	$gid=$_GET['gid'];
    	$face=D('Image');
    	$data0['is_face']=0;
    	$data1['is_face']=1;
    	$res=$face->where('goods_id='.$gid)->save($data0);
    	$res=$face->where('id='.$id)->save($data1);
    	if($res){
    		$this->ajaxReturn(1);
    	}
    }
}