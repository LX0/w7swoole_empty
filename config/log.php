<?php
/**
 * 配置日志
 *
 * handler
 *      stack 用于创建「多通道」通道的聚合器
 *      stream
 *      daily 基于 stream
 *      syslog
 *      errorlog
 *      nativemailer 利用php mail()函数发送邮件
 * level
 *      debug
 *      info
 *      notice
 *      warning
 *      error
 *      critical
 *      alert
 *      emergency
 */

return [
	'default' => 'stack',

	'channel' => [
		'stack' => [
			'driver' => 'stack',
			'channel' => ['single'],
		],
		'single' => [
			'driver' => 'daily',
			'path' => RUNTIME_PATH . DS. 'logs'. DS. 'w7.log',
			'level' => 'debug',
			'days' => '1',
		],
		'database' => [
			'driver' => 'stream',
			'path' => RUNTIME_PATH . DS. 'logs'. DS. 'db.log',
			'level' => 'debug',
		],
		'cache' => [
			'driver' => 'stream',
			'path' => RUNTIME_PATH . DS. 'logs'. DS. 'cache.log',
			'level' => 'debug',
		],
		'invoice' => [
			'driver' => 'daily',
			'path' => RUNTIME_PATH . DS. 'logs'. DS. 'invoice.log',
			'level' => 'debug',
			'days' => 1,
		],
		'test' => [
			//日志缓存条数
			'buffer_limit' => 10,
			//自定义handler 在app/Handler/Log/TestHandler
			'driver' => 'test',
			'level' => 'debug',
		]
//		'daily' => [
//			'driver' => 'daily',
//			'path' => RUNTIME_PATH . DS. 'logs'. DS. 'w72.log',
//			'level' => 'debug',
//			'days' => 7,
//		],
//		'syslog' => [
//			'driver' => 'syslog',
//			'level' => 'debug',
//		],
//		'errorlog' => [
//			'driver' => 'errorlog',
//			'level' => 'debug',
//		],
//		'mail' => [
//			'driver' => 'mail',
//			'level' => 'debug',
//			'to' => 'donknap@qq.com',
//			'username' => '914417117@qq.com',
//			'password' => 'mkheevmmnezdbfcg',
//			'subject' => '我爱你微擎标题',
//			'server' => [
//				'host' => 'smtp.qq.com',
//				'port' => 465,
//				'scheme' => 'ssl',
//			]
//		],
	],
];
