<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	if (session('username') == ''){
		 	$this->redirect('/Admin/login');
    	}
   		$this->display();
    }

    public function login(){
    	echo 111;	
    }
}