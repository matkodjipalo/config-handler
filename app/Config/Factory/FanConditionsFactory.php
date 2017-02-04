<?php

namespace Config\Factory;

use Config\Model\Fan\FanSolarCurrentConditions;
use Config\Model\Fan\FanSolarVoltageConditions;
use Config\Model\Fan\FanTemperatureConditions;
use Config\Model\Fan\FanConditions;
use \Config\Helper\ArrayExtractor;

/**
 * Servis za stvaranje konfiguracijskih uvjeta za LED traku.
 */
class FanConditionsFactory
{
    /** @var ArrayExtractor */
    private $arrayExtractor;

    public function __construct()
    {
        $this->arrayExtractor = new ArrayExtractor();
    }

    /**
     * @param  array $conditionsArray
     * @return FanConditions
     */
    public function createConditions(array $conditionsArray)
    {
        $fanConditions = new FanConditions();

        // $this->createTemperatureConditions();
        // $this->createSolarCurrentConditions();
        // $this->createSolarVoltageConditions();

        return $fanConditions;
    }
}
