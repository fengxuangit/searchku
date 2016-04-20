<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING' => array(
			'__PUBLIC__' => __ROOT__.'/'.APP_NAME.'/blog/Tpl/Index/', 
	),
	'URL_ROUTER_ON'	=> true,
	'TMPL_FILE_DEPR' => '_',
	'DB_TYPE' => 'mysql',
	'DB_HOST' => '127.0.0.1',
	'DB_NAME' => 'searchku',
	'DB_USER' => 'root',
	'DB_PWD'  => '123480',
	'DB_CHARSET' => 'utf8',
	'DB_DEBUG' => TRUE,
	'DB_PREFIX' => 'sk_',
	// 'ERROR_PAGE' => '/Home/404.html',
);