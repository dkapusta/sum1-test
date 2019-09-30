<?php

class Framework
{
	private $config;
	private $request;
	private $route;

	function __construct($config)
	{
		$this->config = $config;
	}

	function run()
	{
		$this->request = new Request($this->config['defaultRoute']);
		$this->route = new Route($this->request, $this->config['defaultAction']);

		$controllerName = ucfirst($this->route->controller) . 'Controller';
		$actionName = $this->route->action . 'Action';
		require ROOT . '/controllers/' . $controllerName . '.php';

		$controller = new $controllerName($this->config, $this->route->params);
		$controller->beforeAction();
		$controller->$actionName();
	}
}
