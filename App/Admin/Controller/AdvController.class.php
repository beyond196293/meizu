<?php
namespace Admin\Controller;
use Think\Controller;
class AdvController extends Controller {
    	public function adv(){     
            	$adv=M('adv');
            	$res=$adv->select();
        		$this->assign('list',$res);
        		$this->display();
        }
        public function add_data(){ 
                $upload=new \Think\Upload();// 实例化上传类  
                $upload->maxSize=3145728 ;// 设置附件上传大小   
                $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
                $upload->savePath=''; 
                $upload->rootPath='./Public/Uploads/'; // 设置附件上传目录    // 上传文件   
                $info=$upload->upload(); 
                if(!$info){// 上传错误提示错误信息     
                   $this->error($upload->getError());    
            }
            if(!empty($_POST)){  
                    $_POST['image']=$info['image']['savepath'].$info['image']['savename'];
                    $temp=D('adv');  
                    $res=$temp->add($_POST);  
                if($res){  

                    $this->redirect("Adv");
                }else{  
                    echo "添加失败";  
                }  
            }else{  
                echo "内容为空";  
                $this->display();  
            }
    	}
        public function adv_alter(){
            if(IS_POST){
                $upload=new \Think\Upload();// 实例化上传类  
                $upload->maxSize=3145728 ;// 设置附件上传大小   
                $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
                $upload->savePath=''; 
                $upload->rootPath='./Public/Uploads/'; // 设置附件上传目录    // 上传文件  \
                //dump($upload);exit;
                $info=$upload->upload(); 
                //dump($info);exit;
                //dump($yuan);exit;
                if(!$info){// 上传错误提示错误信息     
                   $info=$_POST['image2'];
                }else{
                //dump($_POST['image2']);exit;
                @unlink('./Public/Uploads/'.$_POST['image2']);      //删除文件里的图片  unlink里面必须是对象,里面的地址是相对路径前面加.
                //dump($dun);exit;
                $_POST['image']=$info['image']['savepath'].$info['image']['savename'];
                }
                //dump($info);exit;
                $user=D('adv');
                $id=$_POST['id'];
                $info=$user->create();
                if(!$info){
                    $this->error($user->getError());
                }else{
                    $user->where('id='.$id)->save($info);
                    $this->redirect('adv');
                }
            }else{
                $id=$_GET['id'];
                $user=D('adv');
                $userlist=$user->find($id);
                //dump($userlist);
                $this->assign('list',$userlist);
                $this->display('adv_alter');
            }
        }

    	public function del(){
    			$id=$_GET['id'];//从页面获取id
    			$cate=D('adv');//您要删除的表
    			$res=$cate->delete($id);
    			//$this->display('adv');
    			$this->redirect("Adv");
	    }
}