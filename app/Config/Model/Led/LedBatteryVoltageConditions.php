<?php

namespace Config\Model\Led;

class LedBatteryVoltageConditions
{
	/** @var boolean */
	public $active = true;

	/** @var float */
    public $lowerThreshold = 11.95;
    
    /** @var float */
    public $upperThreshold = 12.5;
}
