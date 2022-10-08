<?php 

class Router {

	private $paths = [];

	private function addToPath($method, $path, $view) {

		$route = [
			'method' => $method,
			'path' => $path,
			'view' => $view
		];

		array_push($this->paths, $route);

	}

	public function get($path, $view) {

		$this->addToPath('GET', $path, $view);

	}

	public function run() {

		foreach($this->paths as $path) {

			// Router logic
			if($_SERVER['REQUEST_URI'] == $path['path']) {

				require $path['view'];

			} else {

				header('HTTP/1.1 404 Not Found');

			}

		}

	}

}