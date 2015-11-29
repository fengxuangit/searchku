<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }

    public function verity(){
    	// import('ORG.Util.Image');
    	// Image::buildImageVerify(4, 1, 'png');
    	$config = array(
    		'fontSize' => '14',
    		'length' => 3,
    		'useNoise' => false,
    	);
    	$verify = new \Think\Verify($config);
    	$verify->entry();public.css
    }

    public function login(){
    	echo session('verify');

    }
}




