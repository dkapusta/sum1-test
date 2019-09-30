<?php

class Request
{
	public $url;

	function __construct($default)
	{
		$this->url = explode('?', $_SERVER['REQUEST_URI'])[0];

		if (!$this->url || $this->url == '/') {
			$this->url = $default ?: 'site/index';
		} else if ($this->url[0] == '/') {
			$this->url = ltrim($this->url, '/');
		}
	}
}
