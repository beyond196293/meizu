<?php
namespace Admin\Controller;
use Think\Controller;
class FeedbackController extends Controller {
	public function feedback(){
		$Column = D('Aboutus'); // 实例化User对象
  				$count = $Column->count();// 查询满足要求的总记录数
  				$Page = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		        $Page->setConfig('prev',上一页);
		        $Page->setConfig('next',下一页);
  				$show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
  				$list = $Column->limit($Page->firstRow.','.$Page->listRows)->select();
          //dump($list);exit;
  				$this->assign('list',$list);// 赋值数据集
  				$this->assign('page',$show);// 赋值分页输出
  				$this->display();
	}
  public function feed(){
    //dump($_GET);exit;
    $id=$_GET['id'];
    $Aboutus = D('Aboutus');
    $info = $Aboutus->find($id);
    //unset($info['solve']);
    $info['0']['solve']='已解决';
    $goods=$Aboutus->create($info);
    //dump($goods);
    $res=$Aboutus->where('id='.$id)->save($goods[0]);
    $data=$Aboutus->find($id);
    $this->ajaxReturn($data['solve']);
    }
  public function del(){
    $id=$_GET['id'];
    $Cart=D('Aboutus');
    $res=$Cart->delete($id);
      if ($res) {
        $this->ajaxReturn(1);
      }
    }
}