<?php

namespace Config\Model\Fan;

class FanSolarVoltageConditions
{
	/** @var boolean */
	public $active = true;

	/** @var integer */
    public $lowerThreshold = 10;
    
    /** @var integer */
    public $upperThreshold = 12;
}
