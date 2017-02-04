<?php

namespace Config\Model;

class Config
{
	/** @var string */
	public $ssid = "Include1";

	/** @var string */
	public $token = "123-Steora";

	/** @var ConfigConditions */
	public $conditions;

	public function __construct()
	{
		$this->conditions = new ConfigConditions();
	}
}
