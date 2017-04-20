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
            'field'  => I('post.type'),
            'string' => I('post.keyword'),
        );
        $result = $es->search($search)['hits']['hits'];
        $data = [];
        for ($i=0;$i<count($result); $i++){
            array_push($data, $result[$i]['_source']);
        }
        $this->assign('result', $data);
        $this->display();
    }

}