<?php
/**
 * 最多1024个定时任务
 * @author donknap
 * @date 18-11-10 上午11:13
 */
return [
	'setting' => [
		//执行任务的进程数
		'worker_num' => 3,
		'mq_key' => 2,
//		是否以守护进程的方式启动
		'daemonize' => false
	],
	'task' => [
//		'test' => [
//			'enable' => true,
//			'rule' => '*/2 * * * * *',
//			'task' => \W7\App\Task\TestTask::class,
//		]
	]
];