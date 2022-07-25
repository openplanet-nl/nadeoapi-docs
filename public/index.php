<?php

include('/var/www/nin/nf.php');

nf_route('/', 'IndexController.Page');

nf_begin([
	'name' => 'Trackmania API documentation - Openplanet',
	'debug' => [
		'enabled' => true,
	],
	'routing' => [
		'preferRules' => false,
		'rules' => [
			'/^\\/(?<path>[a-z0-9\\-_\\/]+)$/' => 'IndexController.Page',
		],
	],
]);