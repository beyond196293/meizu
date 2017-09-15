<?php
namespace Admin\Controller;
use Think\Controller;
class StatisticsController extends Controller {
    	public function index(){
    	$goods=D('Goods');
        $where=[];
         //商品名条件搜索
         if(!empty($_GET['name'])){
           	$where['name'] = array('LIKE',"%{$_GET['name']}%");
         }
        $count=$goods->where($where)->count();
		$Page = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	    $Page->setConfig('prev',上一页);
	    $Page->setConfig('next',下一页);
		// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $goods->where($where)->limit($Page->firstRow.','.$Page->listRows)->getAll();
		//dump($list);exit;
		$show = $Page->show();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
    }
    	public function index0(){
    		$goods=D('Goods');
    		$user=D('User');
    		$tnum=$goods->select();
    		$use=$user->select();
    		//dump(count($tnum));
    		$pnum=0;   //商品销售总数
    		for($i=0;$i<count($tnum);$i++){
    			$pnum+=$tnum[$i]['sale_num'];
    		}
    		$mary=0;   //商品销售总额
    		for($i=0;$i<count($tnum);$i++){
    			$mary+=$tnum[$i]['sale_num']*$tnum[$i]['price'];
    		}
    		$us=count($use);	//总用户
    		$this->assign('pnum',$pnum);
    		$this->assign('mary',$mary);
    		$this->assign('us',$us);
    		$this->display();
    	}
}