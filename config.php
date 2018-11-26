<?php

$configs = [
	'app' => [
		'APP_NAME' => '',
		'APP_PATH' => __DIR__.'/app/',
		'VIEW_PATH' => __DIR__.'/app/view/',
		'ROOT_PATH' => '/mvc',

	],

	'database' => [
		'DB_HOST' => '127.0.0.1',
		'DB_USER' => 'root',
		'DB_PASS' => '',
		'DB_NAME' => 'simpleblog',
		'DB_CHARSET' => 'utf8',

	],

];


foreach($configs as $config){
	foreach($config as $key => $val){
		define($key,$val);
	}
}