<?php
namespace Admin\Controller;
use Think\Controller;

class ManageController extends CommonController{  //TODO  以后要改为CommonController
	public function index(){
		$this->display();
	}

	public function info(){
        if (!IS_POST){
            $result = M('data')->where("done=0")->select();
            $this->assign('result', $result);
            $this->display();
        }else{
            $data = array(
                'name'      =>  I('post.dbname'),
                'referer'   =>  I('post.referer'),
                'done'      =>  0,
                'link'      =>  I('post.link'), 
                'time'      =>  time(),
            );
            $result = M('data')->add($data);
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

    #todo  下载脚本中需要使用数据库来保存信息
    #表 需要增加 md5 下载路径 下载进度等字段
    public function preview(){
        if(!IS_POST){
            $id = I('id');
            $source = M('data')->field('downpath')->where(array('id'=>$id))->find();
            $content = GetFileLine($source['downpath'], 0, 3);
            $this->assign('result', $content);
            $this->assign('id', $id);
            $this->display();
        }else{
            $id = I('post.id');
            $data = array(
                'filecolumns' => trim(I('post.columns')),
                'split'       => trim(I('post.split')),
            );
            $result = M('data
                ')->where(array('pid'=>$id))->save($data);
            if($result){
                $this->success('预判字段成功');
            }else{
                $this->error('预判字段失败');
            }
        }
    }

}


