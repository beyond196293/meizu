<?php
namespace Home\Controller;
use Think\Controller;
class CatelistController extends Controller {
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
        $catelist=$cate->where('pid=0')->select();
        $a=$cate->field('id,name')->where("path=concat(0,',',pid,',')")->limit(5)->select();
        $arr=array();
        foreach ($a as $val){
            $goodslist=$goods->field('g.id gid,i.id iid,i.name iname,g.name gname,g.price gprice')->table('mz_goods g,mz_image i')->where('g.cate_id='.$val['id'].' and i.is_face=1 and i.goods_id=g.id')->limit(5)->select();
            $arr[$val['name']]=$goodslist;
        }
        $this->assign('goodslist',$arr);
         $this->assign('catelist',$catelist);
        $name=$_GET['name'];
        $img=D('Image');
        $cateone=$cate->field('id,name')->where('pid=0')->limit(7)->select();
        $catetwo=$cate->field('id,name')->where("path=concat(0,',',pid,',')")->limit(7)->select();
        if($name!='全部'){  
            $c=$cate->field('id,pid')->where('name='."'".$name."'")->find();
            $ab[]=$c['id'];
            $where['path']=array('like','%,'.$c['id'].',%');
            $a=$cate->where($where)->select();
            foreach($a as $val2){
                $ab[]=$val2['id'];
            }
            $in['cate_id']=array('in',$ab);
            $glist=$goods->field('i.name iname,g.name gname,g.id,g.price,g.describe')->table('mz_goods g,mz_image i')->where($in)->where('g.id=i.goods_id and i.is_face=1')->select();
        }else{
            $glist=$goods->field('i.name iname,g.name gname,g.id,g.price,g.describe')->table('mz_goods g,mz_image i')->where('g.id=i.goods_id and i.is_face=1')->select();
        }
        $hot=$goods->field('i.name iname,g.price,g.describe,g.name gname,g.id')->table('mz_goods g,mz_image i')->where('g.id=i.goods_id and is_hot=1 and i.is_face=1 and g.status=1')->limit(10)->select();
        $this->assign('hot',$hot);                    
        $this->assign('glist',$glist);
        $this->assign('name',$name);
        $this->assign('cateone',$cateone);
        $this->assign('catetwo',$catetwo);
        $config=D('Config');
        $zzk=$config->find();
        $this->assign('zzk',$zzk);
        $this->display('catelist');
        
	}
}
