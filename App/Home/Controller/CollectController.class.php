<?php
namespace Home\Controller;
use Think\Controller;
class CollectController extends CommonController {
    public function index(){
        $collect=D('Collect');
        $id=$_SESSION['home']['id'];
        $res=$collect->where('uid='.$id)->select();
        $goods=D('Goods');
        $image=D('Image');
        foreach($res as $key=>$val){
            $id=$val['goodsid'];
            $images=$image->where('goods_id='.$id.' AND is_face=1')->find();            //dump($images);
            $good[$id]=$goods->find($id);
            $good[$id]['savepath']=$images['name'];
        }
        //dump($good);
        $this->assign('info',$good);
        $this->display();
    }
    public function add(){
        if(!empty($_SESSION['home'])){
        $collect=D('Collect');
        $uid=$_SESSION['home']['id'];
        $gid=$_GET['id'];
        $data['uid']=$uid;
        $data['goodsid']=$gid;
        $collect=D('Collect');
        $res=$collect->where($data)->find();
        //dump($res);
        if($res){
        
        $this->ajaxReturn('您已收藏过啦!');
        }else{
        $collect->add($data);
        $this->ajaxReturn('收藏成功');
        }
        }else{
            $this->ajaxReturn('亲，先登录');
        }  
    }
    public function del(){
        $collect=D('Collect');
        $uid=$_SESSION['home']['id'];
        $gid=$_GET['id'];
        $data['uid']=$uid;
        $data['goodsid']=$gid;
        $res=$collect->where($data)->delete();
    }
}
