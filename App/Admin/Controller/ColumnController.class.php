<?php
namespace Admin\Controller;
use Think\Controller;
class ColumnController extends Controller {
	public function column(){
  				$Column = D('column'); // 实例化User对象
  				$count = $Column->count();// 查询满足要求的总记录数
  				$Page = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
          $Page->setConfig('prev',上一页);
          $Page->setConfig('next',下一页);
  				$show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
  				$list = $Column->limit($Page->firstRow.','.$Page->listRows)->select();
          //dump($list);exit;
  				$this->assign('list',$list);// 赋值数据集
  				$this->assign('page',$show);// 赋值分页输出
  				$this->display('column');
    }
  public function column_add(){
          if(!empty($_POST)){  
            $temp=D('Column');  
            $res=$temp->add($_POST);  
            if($res){  
                $this->redirect("Column");
            }else{  
                echo "添加失败";  
            }  
        }else{  
            echo "内容为空";  
            $this->display();  
        }
  }
  public function del(){
          $id=$_GET['id'];
          $cate=D('Column');
          $res=$cate->delete($id);
          $this->redirect("Column");
  }
  //
  public function column_edit(){
          if(IS_POST){
                $user=D('column'); 
                $id=$_POST['id'];
                //dump($id);exit;
                $info=$user->create();
                //dump($info);exit;
                if(!$info){
                    $this->error($user->getError());
                }else{
                    $user->where('id='.$id)->save($info);
                    //dump($user);exit;
                    $this->redirect('column');
                }
            }else{
                $id=$_GET['id'];
                $user=D('column');
                $userlist=$user->find($id);
                //dump($userlist);exit;
                $this->assign('list',$userlist);
                $this->display();
            }
  }
}