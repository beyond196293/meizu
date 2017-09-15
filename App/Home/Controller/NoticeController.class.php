<?php
namespace Home\Controller;
use Think\Controller;
class NoticeController extends CommonController {
    public function Index(){
        $cate=D('Cate');
        $catelist=$cate->where('pid=0')->select();
        $second=$cate->where("path=concat(0,',',pid,',')")->limit(5)->order('id asc')->select();
        $this->assign('second',$second);
        $this->assign('catelist',$catelist);
        $notice=D('Notice');
        $noticelist=$notice->getAll();
        //dump($noticelist);
        $this->assign('noticelist',$noticelist);
        $this->display();
    }
}
