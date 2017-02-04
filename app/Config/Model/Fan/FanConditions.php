<?php

namespace Config\Model\Fan;

class FanConditions
{
    /** @var FanTemperatureConditions */
    public $temperatureConditions;

    /** @var FanSolarCurrentConditions */
    public $solarCurrentConditions;

    /** @var FanSolarVoltageConditions */
    public $solarVoltageConditions;

    public function __construct()
    {
        $this->temperatureConditions = new FanTemperatureConditions();
        $this->solarCurrentConditions = new FanSolarCurrentConditions();
        $this->solarVoltageConditions = new FanSolarVoltageConditions();
    }
}
