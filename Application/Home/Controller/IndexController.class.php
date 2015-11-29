<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    
    public function search(){
    	if (I('search_text') != '') {
    		//TODO 业务逻辑
    		
    	}else {
    		$this->error("sorry, Can't search with Null Value", U('/index.php/','',''));
    	}
    }

    public function test() {
        $data = array(
            'title' => 'thinkphp',
            'content' => 'create by thinkphp',
            'tag' => array("PHP", "Thinkphp", "MVC"),
        );
        // echo json_encode($data);
        // echo GET('http://192.168.108.128:9200');
        echo POST('http://192.168.108.128:9200/blog/article', json_encode($data), 'post');
    }
}