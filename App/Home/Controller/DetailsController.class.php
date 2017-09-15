<?php
namespace Home\Controller;
use Think\Controller;
class DetailsController extends Controller {
    public function index(){
         $list=M('config')->find();
	    	$switch=$list['switch'];
		    if($switch==0){
		    }else{
			    echo '网站正在维护中...............................';die;
            }
        //header导航栏
        $column=D('Column');
        $res=$column->select();
        //dump($res);exit;
        $this->assign('column',$res);
        $cate=D('Cate');
        $goods=D('Goods');
        $a=$cate->field('id,name')->where("path=concat(0,',',pid,',')")->limit(5)->select();
        $arr=array();
        foreach ($a as $val){
            $goodslist=$goods->field('g.id gid,i.id iid,i.name iname,g.name gname,g.price gprice')->table('mz_goods g,mz_image i')->where('g.cate_id='.$val['id'].' and i.is_face=1 and i.goods_id=g.id')->limit(5)->select();
            $arr[$val['name']]=$goodslist;
        }
        $this->assign('goodslist',$arr);
        unset($_SESSION['nature']); 
        $com=D('Comment');
        $image=D('Image');
        $user=D('User');
        $ginfo=D('Ginfo');
        $id=$_GET['id'];
        $g=$goods->where($_GET)->find();
        $color=explode(',',$g['color']);
        $memory=explode(',',$g['memory']);
        $net=explode(',',$g['net']);
        $i=$image->field('name,is_face')->where("goods_id=".$id)->order('is_face desc')->select();
        $this->assign('glist',$g);
        $this->assign('img',$i);
        $this->assign('color',$color);
        $this->assign('net',$net);
        $this->assign('memory',$memory);
        $config=D('Config');
        $zzk=$config->find();
        $this->assign('zzk',$zzk);
        //dump($g);
                                                                                                                                                                                                                                                         
        //加载详情图片
        $infolist=$ginfo->field('name')->where("goods_id=".$id)->select();
        $this->assign('infolist',$infolist);
        //dump($infolist);
        //加载评论
        $comlist=$com->field('c.count,c.recount,c.time,u.name')->table('mz_comment c,mz_user u')->where('c.gid='.$id.' and u.id=c.uid')->getTime();
        $ping=count($comlist);
        $this->assign('comlist',$comlist);
        $this->assign('ping',$ping);
        $this->display();
        
	}
    //将商品属性添加到session
    public function nature(){
        $_SESSION['nature'][$_GET['netn']]=$_GET['netv'];
    }
	//判断用户是否选中属性
    public function st(){
        $aa=$_GET['aa'];
        switch ($aa) {
            case 'other':
                if($_SESSION['nature']['color']){
                    $this->ajaxReturn(1);
                }else{
                    $this->ajaxReturn(0);
                }
                break;
            case 'phone':
                if($_SESSION['nature']['color'] && $_SESSION['nature']['net'] && $_SESSION['nature']['memory']){
                    $this->ajaxReturn(1);
                }else{
                    $this->ajaxReturn(0);
                }
                break;
        }
    }
}
