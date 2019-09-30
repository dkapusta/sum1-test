<?php

define(ROOT, dirname(__FILE__));
header('Content-Type: text/html; charset=utf-8');

$dir = opendir("framework");
while($file = readdir($dir))
{
	if($file != "." && $file != ".." && $file != "...")
	{
		include "framework/".$file;
	}
}

$config = require("config.php");
$app = new Framework($config);
$app->run();
