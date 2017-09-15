<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
         $list=M('config')->find();
	    	$switch=$list['switch'];
		    if($switch==0){
		    }else{
			    echo '网站正在维护中...............................';die;
            }
        //轮播
        $adv=M('adv');           	
    	$res=$adv->select();
		$this->assign('list',$res);
        //友情链接
        $column=D('Column');
        $res=$column->select();
        //dump($res);exit;
        $this->assign('column',$res);
        //广告图片
        $advert=D('Advert');
        $a=$advert->where('id=1')->select();
        $b=$advert->where('id=2')->select();
        $c=$advert->where('id=3')->select();
        $d=$advert->where('id=4')->select();
        $e=$advert->where('id=5')->select();
        $f=$advert->where('id=6')->select();
        //dump($a);dump($b);exit;
        $this->assign('a',$a);
        $this->assign('b',$b);
        $this->assign('c',$c);
        $this->assign('d',$d);
        $this->assign('e',$e);
        $this->assign('f',$f);
        //header导航栏
        $cate=D('Cate');
        $goods=D('Goods');
        $catelist=$cate->where('pid=0')->select();
        $a=$cate->field('id,name')->where("path=concat(0,',',pid,',')")->limit(5)->select();
        $arr=array();
        foreach ($a as $val){
            $goodslist=$goods->field('g.id gid,i.id iid,i.name iname,g.name gname,g.price gprice')->table('mz_goods g,mz_image i')->where('g.cate_id='.$val['id'].' and i.is_face=1 and i.goods_id=g.id')->limit(5)->select();
            $arr[$val['name']]=$goodslist;
        }
        $this->assign('goodslist',$arr);
         $this->assign('catelist',$catelist);
        //侧边栏
        $cateone=$cate->field('id,name')->where('pid=0')->select();
        $precate=array();
        foreach($cateone as $val){
            $ab[]=$val['id'];
            $where['path']=array('like','%,'.$val['id'].',%');
            $a=$cate->where($where)->select();
            foreach($a as $val2){
                $ab[]=$val2['id'];
            }
            //dump($ab);
            $in['g.cate_id']=array('in',$ab);
            $precate[$val['name']]=$goods->field('i.name iname,g.name gname,g.id gid')->table('mz_goods g,mz_image i')->where($in)->where('g.id=i.goods_id and i.is_face=1')->limit(5)->select();                    
            unset($ab);                   
        }
        //dump($precate);exit;
        $this->assign('precate',$precate);
        //热品推荐
        $hot=$goods->field('i.name iname,g.price,g.describe,g.name gname,g.id')->table('mz_goods g,mz_image i')->where('g.id=i.goods_id and is_hot=1 and i.is_face=1 and g.status=1')->order('g.sale_num desc')->limit(10)->select();
        $this->assign('hot',$hot);
        //dump($hot);exit;
        //手机
        $where['path']=array('like','%,1,%');
        $a=$cate->where($where)->select();
        $ac[0]=1;
        foreach($a as $val){
            $ac[]=$val['id'];
        }
        $in['g.cate_id']=array('in',$ac);
        $phone=$goods->field('i.name iname,g.price,g.describe,g.name gname,g.id')->table('mz_goods g,mz_image i')->where($in)->where('g.id=i.goods_id and i.is_face=1 and g.status=1')->limit(10)->select(); 
        $this->assign('phone',$phone);
        //精选配件
        $where['path']=array('like','%,4,%');
        $a=$cate->where($where)->select();
        $ad[0]=4;
        foreach($a as $val){
            $ad[]=$val['id'];
        }
        $in['g.cate_id']=array('in',$ad);
        $part=$goods->field('i.name iname,g.price,g.describe,g.name gname,g.id')->table('mz_goods g,mz_image i')->where($in)->where('g.id=i.goods_id and i.is_face=1 and g.status=1')->limit(10)->select();
        $this->assign('part',$part);
        //智能硬件
        $where['path']=array('like','%,2,%');
        $a=$cate->where($where)->select();
        $ae[0]=2;
        foreach($a as $val){
            $ae[]=$val['id'];
        }
        $in['g.cate_id']=array('in',$ae);
        $ai=$goods->field('i.name iname,g.price,g.describe,g.name gname,g.id')->table('mz_goods g,mz_image i')->where($in)->where('g.id=i.goods_id and i.is_face=1 and g.status=1')->limit(10)->select(); 
        $this->assign('ai',$ai);
        //手机周边
        $where['path']=array('like','%,7,%');
        $a=$cate->where($where)->select();
        $af[0]=7;
        foreach($a as $val){
            $af[]=$val['id'];
        }
        $in['g.cate_id']=array('in',$af);
        $alw=$goods->field('i.name iname,g.price,g.describe,g.name gname,g.id')->table('mz_goods g,mz_image i')->where($in)->where('g.id=i.goods_id and i.is_face=1 and g.status=1')->limit(10)->select(); 
        $this->assign('alw',$alw);
        //网站设置
        $config=D('Config');
        $zzk=$config->find();
        $this->assign('zzk',$zzk);
        $this->display();
    }
    public function adv(){
        $id=$_GET['i']+1;
        $left=D('Imgleft');
        $res=$left->find($id);
        if($res){
            $this->ajaxReturn($res);
        }else{
            $this->ajaxReturn(0);
        }
    }
                
}

