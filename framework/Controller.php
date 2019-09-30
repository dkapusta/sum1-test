<?php

class Controller
{
	protected $config, $params;
	protected $layout = 'main';

	function __construct($config, $params = [])
	{
		$this->config = $config;
		$this->params = $params;
	}

	function render($filename, $data = [])
	{
		ob_start();
		require ROOT . '/views/' . lcfirst(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php';
		$content = ob_get_clean();

		if ($this->layout == false) {
			$content;
		} else {
			require ROOT . '/views/layouts/' . $this->layout . '.php';
		}
	}

	public function beforeAction()
	{
		return true;
	}
}
