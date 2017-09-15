<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller {
  
    //分类展示
    public function cate(){
        if(empty($_GET)){
            $cate=D('Cate');
            $category=$cate->where('pid=0')->getAll();
            $pid['pid']=0;
            //dump($category);
            $this->assign('pid',$pid);
            $this->assign('category',$category);
            $this->display('cate');
        }else{
            $map['pid']=$_GET['id'];
            $cate=D('Cate');
            $pid=$cate->find($map['pid']);
            //dump($pid);
            $category=$cate->where($map)->getAll();
            $this->assign('pid',$pid);
            $this->assign('category',$category);
            $this->display('cate');
        }       
    }
    //添加分类
    public function cateAdd(){
        //var_dump($_POST);
        if(empty($_POST)){
            $this->assign('id',$_GET['id']);
            $this->display('cateadd');
        }else{
        if(empty($_POST['name']))$this->error('分类名称不能为空');
            //dump($_POST);
        if(empty($_POST['id'])){      
            $_POST['pid']=0;
            $_POST['path']="0,";
            //dump($_POST);
            $cate=D('Cate');
            $res=$cate->add($_POST);
        if($res){
                $this->success('新增成功', 'Cate/cate');
        }else{
                $this->error('新增失败');    
            }
        }else{
            //dump($_POST);    
            $cate=D('Cate');
            //dump($_POST['id']);
            $path=$cate->field(array("concat(path,id,',')"=>"bpath"))->where('id='.$_POST['id'])->select();
            //dump($path);
            $_POST['pid']=$_POST['id'];
            unset($_POST['id']);
            $_POST['path']=$path[0]['bpath'];
            //dump($_POST); 
            $res=$cate->add($_POST);
        if($res){
                $this->success('新增成功', 'Cate/cate');
        }else{
                $this->error('新增失败');    
            }
        }
    }
}   
    //修改分类
    public function cateUp(){
            if(empty($_POST)){
            $id=$_GET['id'];
            // dump($_GET);
            $cate=D('Cate');
            $info =$cate->find($id);
            //dump($info);
            $this->assign('info',$info);
            $this->display('cateup');
        }else{
            $cate=D('Cate');
            if($_POST['name']==$info['name']){
            $this->error('修改失败，没有进行修改');
        }else{
            $res=$cate->save($_POST);
            if($res){
                $this->success('修改成功','Cate/cate');
            }else{
                $this->error('修改失败');
            }
        }         
    }
}
    //删除分类
    public function del(){
            $map=$_GET['id'];
            $cate=D('cate');
            $result=$cate->where('pid='.$map)->select();
            if($result){
            $this->error('请先删除子类');
        }else{
            $res=$cate->delete($map);
        if($res){
            $this->success('删除成功',U('Cate/cate'));
        }else{
            $this->error('删除失败');
        }
    }
}
        //返回上一级按钮
        public function back(){
            $map['pid']=$_GET['pid'];
            $cate=D('Cate');
            $pid=$cate->find($map['pid']);
            if(empty($pid))$pid['pid']=0;
            //dump($pid);
            $category=$cate->where($map)->getAll();
            $this->assign('pid',$pid);
            $this->assign('category',$category);
            $this->display('cate');
        }
        //设置隐藏显示
        public function show(){
            $id=$_GET['id'];
            //dump($id);
            $cate=D('Cate');
            $info=$cate->find($id);
        if($info['display']==0){
            $info['display']=1;
            $res=$cate->save($info);
            $data=$cate->find($id);
            $data['display']='显示';
            $this->ajaxReturn($data['display']);
        }else{
            //$info['display']==1;
            $info['display']=0;
            //dump($info);
            $res=$cate->save($info);
            $data=$cate->find($id);
            $data['display']='隐藏';
            $this->ajaxReturn($data['display']);
            //$this->display('cate');
            }
        }
        
}
