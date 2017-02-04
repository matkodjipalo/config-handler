<?php

namespace Config\Model\Fan;

class FanSolarCurrentConditions
{
	/** @var boolean */
	public $active = true;

	/** @var float */
    public $lowerThreshold = 5.1;
    
    /** @var float */
    public $upperThreshold = 6.0;
}
