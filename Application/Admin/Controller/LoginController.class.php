<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }

    public function verity(){
    	$config = array(
    		'fontSize' => '14',
    		'length' => 3,
    		'useNoise' => false,
    	);
    	$verify = new \Think\Verify($config);
    	$verify->entry();
    }

    public function check(){
        if (!IS_POST){
            $this->error('非法访问');
        }
        //验证码判断
        $code = I('post.verity');
        if(!check_verity($code)){
            $this->error("验证码不正确");
        }

        $username = I('post.username');
        $password = I('post.password', '', 'md5');
            
        if(!!$result=M('admin')->where(array('username'=>$username))->find()){
            if ($result['password'] != $password){
                $this->error("对不起，用户名或密码错误");
            }
        }else {
            $this->error("对不起，用户名或密码错误");
        }

        $_SESSION['username'] = $result['username'];
        $_SESSION['privilege'] = $result['privilege'];

        $this->redirect('Admin/Index/index');

    }

    public function logout(){
        session_unset();
        session_destroy();
        $this->redirect('Admin/Login/Index');
    }

}




