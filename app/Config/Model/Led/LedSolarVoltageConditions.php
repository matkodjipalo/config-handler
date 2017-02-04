<?php

namespace Config\Model\Led;

class LedSolarVoltageConditions
{
	/** @var boolean */
	public $active = true;

	/** @var integer */
    public $lowerThreshold = 7;
    
    /** @var integer */
    public $upperThreshold = 12;
}
