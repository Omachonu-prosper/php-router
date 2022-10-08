<?php

require 'router.php';

function dd($data) {
	echo "<pre>";
		die(var_dump($data));
	echo "</pre>";
}

$router = new Router;

$router->get('/', 'views/index.views.php');

$router->run();