<?php

namespace Config\Model;

use Config\Model\Fan\FanConditions;
use Config\Model\Led\LedConditions;

class ConfigConditions
{
	/** @var LedConditions */
	public $ledConditions;

	/** @var FanConditions */
	public $fanConditions;

	public function __construct()
	{
		$this->ledConditions = new LedConditions();
		$this->fanConditions = new FanConditions();
	}
}
