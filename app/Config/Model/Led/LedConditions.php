<?php

namespace Config\Model\Led;

class LedConditions
{
	/** @var LedBatteryVoltageConditions */
	public $batteryVoltageConditions;

	/** @var LedSolarVoltageConditions */
	public $solarVoltageConditions;

	public function __construct()
	{
		$this->batteryVoltageConditions = new LedBatteryVoltageConditions();
		$this->solarVoltageConditions = new LedSolarVoltageConditions();
	}
}
