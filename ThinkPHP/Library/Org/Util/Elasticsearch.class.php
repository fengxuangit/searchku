<?php
// +----------------------------------------------------------------------
// | ES in TP [ WE CAN DO IT JUST FUCK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://evalshell.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: fengxuan <f4ngxuan520@gmail.com>
// +----------------------------------------------------------------------

namespace Org\Util;

class Elasticsearch {
    public $client;

    public function __construct($hosts=array('127.0.0.1:9200')){
        vendor('Elasticsearch.autoload');
        $this->client = \Elasticsearch\ClientBuilder::create()->setHosts($hosts)->build();
    }

    private function create_index() {
        $index['index'] = 'searchku';
        $index['type'] = 'info';
        $index['body']['settings']['number_of_shards'] = 2;
        $index['body']['settings']['number_of_replicas'] = 0;
        $this->client->create($index);
    }

    public function add_document($data){
        $parmas['body'] = array(
            'testField' => 'testf',
            'username'  => 'feng',
            'email'     => 'fuckqq@qq.com',
            'qq'        => 99999,
        );
        $parmas['index'] = 'searchku';
        $parmas['type'] = 'info';
        $ret = $this->client->index($parmas);
        return $ret;
    }

    public function search($search){
        $parmas = [
            'index' =>  'searchku',
            'type'  =>  'info',
            'body'  =>  [
                'query' =>  [
                    'wildcard'=>[
                        $search['field']=>$search['string'],
                    ],
                ],
            ],
        ];
        $result = $this->client->search($parmas);
        return $result;
    }

    public function get_document($data){
        $parmas = [
            'index' =>  'searchku',
            'type'  =>  'info',
            'id'    =>  $data['id'],
        ];

        $result = $this->client->get($parmas);
        return $result;
    }
}
