<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
        public function _initialize(){             
                //header导航栏
            $list=M('config')->find();
	    	$switch=$list['switch'];
		    if($switch==0){
		    }else{
			    echo '网站正在维护中...............................';die;
            }
            if(empty($_SESSION['home'])){
    		$this->redirect('Login/index');
    	    }
                $cate=D('Cate');
                $goods=D('Goods');               
                $a=$cate->field('id,name')->where("path=concat(0,',',pid,',')")->limit(5)->select();
                $arr=array();
                foreach ($a as $val){
                    $goodslist=$goods->field('g.id gid,i.id iid,i.name iname,g.name gname,g.price gprice')->table('mz_goods g,mz_image i')->where('g.cate_id='.$val['id'].' and i.is_face=1 and i.goods_id=g.id')->limit(5)->select();
                    $arr[$val['name']]=$goodslist;
                }
                $this->assign('goodslist',$arr); 
                $config=D('Config');
                $zzk=$config->find();
                $this->assign('zzk',$zzk); 
                $column=D('Column');
                $res=$column->select();
                //dump($res);exit;
                $this->assign('column',$res);             
        }        
}

