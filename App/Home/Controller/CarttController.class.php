<?php
namespace Home\Controller;
use Think\Controller;
class CarttController extends CommonController {
	public function index(){
		//$_SESSION['home']['id']='1';
		$_POST['uid']=$_SESSION['home']['id'];
		//dump($_POST);exit;
		$_POST['colors']=$_SESSION['nature']['color'];
		$_POST['net']=$_SESSION['nature']['net'];
		$_POST['memory']=$_SESSION['nature']['memory'];
		//dump($_POST);
		//dump($_SESSION);exit;
		unset($_POST['stoke']);
		unset($_SESSION['nature']);
		$cart=D('Cart');
		$res=$cart->add($_POST);
		if($res) {
			$this->redirect(
				'Cart/index');
		}else{
			$this->error('添加失败');
		}
	}
	public function Confimorder(){
		$arr=array_keys($_POST);
		$id=array(); //存的是id
		foreach($arr as $val){
			$id[]=ltrim(strstr($val,','),',');
		}
		$whereid['id']=array('in',$id);
		$tnum=array_values($_POST);//存的是单价小计;
		//dump($tnum);
		$mar=0;	//存的是总价
		foreach ($tnum as $value) {
		    $mar+=$value;
		}
		$Cart=D('Cart');
		$price=array();//存的是商品单价;
		$goods=$Cart->where($whereid)->select();
		for($i=0;$i<count($goods);$i++){
			$price[]=$goods[$i]['price'];
		}
		$num=array();//存的是商品购买数量
		for($i=0;$i<count($goods);$i++){
			$num[]=$tnum[$i]/$price[$i];
		}
		for($i=0;$i<count($goods);$i++){
			$goods[$i]['tnum']=$tnum[$i];
			$goods[$i]['nnum']=$num[$i];
		}
		//dump($goods);exit;
		foreach($goods as $key=>$val){
			$a[$key].=$val['id'];
		}
		$_SESSION['car']=$a;
		//dump($_SESSION['car']);exit;
		$address=D('Address');
		$id=$_SESSION['home']['id'];
		$info=$address->where('mask=1 AND uid='.$id)->find();
		if($info){
			//遍历出用户的优惠券
			$discount=D('Discount');
			$money=$discount->where('uid='.$_SESSION['home']['id'])->getAll();
			//dump($money);
			$this->assign('discount',$money);
			$this->assign('list',$goods);
			$this->assign('info',$info);
			$this->assign('mar',$mar);
			//$this->assign('a',$a);
			$this->display('Confimorder/index2');
		}else{
			$this->error('请添加默认地址',U('/Home/Address/index'));
		}
		
	}
}
