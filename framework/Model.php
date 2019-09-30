<?php

class Model
{
	public $fields;
	protected $db, $isNewRecord;

	function __construct($db)
	{
		$this->isNewRecord = true;
		$this->db = new PDO($db['dsn'], $db['user'], $db['password']);
	}

	public function load($data)
	{
		$this->fields = $data;
	}
}
