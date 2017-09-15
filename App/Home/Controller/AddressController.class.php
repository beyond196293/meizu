<?php
namespace Home\Controller;
use Think\Controller;
class AddressController extends CommonController {
    public function index(){
		//将地址显示
		//dump($_SESSION['home']['id']);
		$id=$_SESSION['home']['id'];
		$address=D('Address');
		$info=$address->where('uid='.$id)->getAll();
		//dump($info);
		$count=$address->where('uid='.$id)->count();
		//dump($count);
		//还可以输入的地址数量
		$last=7-$count;
		//如果没有默认地址，前台默认地址的选项默认被选中
		$mask=$address->where('mask=1 AND uid='.$id)->find();
		//dump($mask);
		if($mask==null){
			$mask=1;
			$this->assign('mk',$mask);
		}
		$this->assign('count',$count);
		$this->assign('last',$last);
		$this->assign('address',$info);
		$this->display();
    }
	//删除地址
	public function del(){
		$id=$_GET['id'];
		$address=D('Address');
		$a=$address->where('id='.$id)->delete();
		if($a){
			$this->ajaxReturn('删除成功！');
		}else{
			$this->ajaxReturn('删除失败！');
		}
		
	}
	//添加地址
	public function add(){
		//dump($_POST);
		$address=D('Address');
		$id=$_SESSION['home']['id'];
		$count=$address->where('uid='.$id)->count();
		if($count==7){
			$this->error('您的地址数量过多，请先删除');
		}else{
			//如果设为默认地址，其他地址都变成备份地址
			if($_POST['mask']){
				$address->mask=0;
				$mask=$address->where('uid='.$_SESSION['home']['id'])->save();
			}
			$_POST['address']=$_POST['s_province'].$_POST['s_city'].$_POST['s_county'].$_POST['address'];
			unset($_POST['s_province']);
			unset($_POST['s_city']);
			unset($_POST['s_county']);
			$_POST['uid']=$_SESSION['home']['id'];
			//dump($_POST);
			$infos=$address->add($_POST);
			//echo $address->getLastSql();
			
			if($infos){
				$this->success('新增成功', U('index'));
			}else{
				$this->error('添加失败');
			}
		}
		
	}
	public function mask(){
		$id=$_GET['id'];
		$address=D('Address');
		//$map['mask']=0;
		$address->mask=0;
		$mask=$address->where('uid='.$_SESSION['home']['id'])->save();
		//$address->mask=1;
		$a['mask']=1;
		$m=$address->where('id='.$id)->save($a);
		//$this->ajaxReturn($m);
	}
	
}
