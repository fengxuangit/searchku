<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    
    public function index(){
        $username = session('username');
        $this->assign('username', $username)->display();
    }

}