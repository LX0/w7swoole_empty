<?php
return [
	'setting' => [
		'daemonize' => true
	],
	'process' => [
		'reload' => [
			'enable' => true,
			'class' => \W7\Core\Process\Process\ReloadProcess::class,
			'number' => 1
		]
	]
];