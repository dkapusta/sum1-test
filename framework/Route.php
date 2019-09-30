<?php

class Route
{
	public $controller, $action, $params;

	function __construct($request, $default)
	{
		$data = explode('/', $request->url);

		$this->controller = $data[0];
		$this->action = $data[1] ?: ($default ?: 'index');
		$this->params = array_slice($data, 2);
	}
}
