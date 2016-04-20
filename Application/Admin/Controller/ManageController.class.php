<?php
namespace Admin\Controller;
use Think\Controller;
class ManageController extends CommonController{  //TODO  以后要改为CommonController
	public function index(){
		$this->display();
	}

	public function info(){
        if (!IS_POST){
            $result = M('task')->where("done=0")->select();
            $this->assign('result', $result);
            $this->display();
        }else{
            $data = array(
                'name'      =>  I('post.dbname'),
                'referer'   =>  I('post.referer'),
                'client'    =>  I('post.client'),
                'link'      =>  I('post.link'),
                'done'      =>  0,
                'time'      =>  time(),
            );
            $result = M('task')->add($data);
            if ($result){
                $this->success('新建任务成功!');
            }else{
                $this->error('新建任务失败!');
            }
        }
        
	}

	public function tasks(){
		$this->display();
	}

}


