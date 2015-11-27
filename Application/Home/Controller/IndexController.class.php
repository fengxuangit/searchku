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
}