<?php

namespace Config\Model\Fan;

class FanTemperatureConditions
{
	/** @var boolean */
	public $active = true;

	/** @var float */
    public $lowerThreshold = 30.0;
    
    /** @var float */
    public $upperThreshold = 35.0;
}
