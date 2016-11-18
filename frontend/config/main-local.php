<?php
$config = [ 
		'components' => [ 
				'request' => [
						// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
						'cookieValidationKey' => '7n5jIpQ8_joeJ1n3U1Q-FwIo92sUM1Gy' 
				],
				'db' => [ 
						'class' => '\yii\db\Connection',
						'dsn' => 'mysql:host=31.220.110.218;dbname=u502190727_sby',
						'username' => 'u502190727_sby',
						'password' => 'wrx52sby',
						'charset' => 'utf8'
				] 
		] 
];

if (! YII_ENV_TEST) {
	// configuration adjustments for 'dev' environment
	$config ['bootstrap'] [] = 'debug';
	$config ['modules'] ['debug'] = [ 
			'class' => 'yii\debug\Module' 
	];
	$config ['bootstrap'] [] = 'gii';
	$config ['modules'] ['gii'] = [ 
			'class' => 'yii\gii\Module' 
	];
}

return $config;
