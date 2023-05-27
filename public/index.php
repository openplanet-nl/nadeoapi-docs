<?php

include('/var/www/nin/nf.php');

nf_route('/', 'IndexController.Page');
nf_route('/api/index', 'IndexController.ApiIndex');

nf_begin([
	'name' => 'Trackmania API documentation - Openplanet',
	'debug' => true,
	'routing' => [
		'preferRules' => false,
		'rules' => [
			'/^\\/(?<path>[a-z0-9\\-\\/]+)$/' => 'IndexController.Page',
		],
	],
	'cache' => [
		'class' => 'APCu',
	],
]);
