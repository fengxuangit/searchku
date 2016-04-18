<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function search(){
        $es = new \Org\Util\Elasticsearch();
        $search = array(
            'field'  => I('type'),
            'string' => I('keyword'),
        );
        $result = $es->search($search);
        print_r($result);
    }

}