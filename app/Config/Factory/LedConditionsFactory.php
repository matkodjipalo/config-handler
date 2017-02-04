<?php

namespace Config\Factory;

use Config\Model\Led\LedBatteryVoltageConditions;
use Config\Model\Led\LedSolarVoltageConditions;
use Config\Model\Led\LedConditions;
use Config\Helper\ArrayExtractor;

class LedConditionsFactory
{
	/** @var ArrayExtractor */
    private $arrayExtractor;

    public function __construct()
    {
        $this->arrayExtractor = new ArrayExtractor();
    }

    /**
     * @param  array $conditionsArray
     * @return LedConditions
     */
    public function createConditions(array $conditionsArray)
    {
        $ledConditions = new LedConditions();
        $batteryVoltageConditions = $this->arrayExtractor
                                        ->extractValueForKey(
                                            'LedBatteryVoltageCondition', $conditionsArray
                                        );

        if (null !== $batteryVoltageConditions) {
            $ledConditions->batteryVoltageConditions =
                                $this->createBatteryVoltageConditions($batteryVoltageConditions);
        }

        $solarVoltageConditions = $this->arrayExtractor
                                        ->extractValueForKey(
                                            'LedSolarVoltageCondition', $conditionsArray
                                        );

        if (null !== $solarVoltageConditions) {
            $ledConditions->solarVoltageConditions =
                                $this->createSolarVoltageConditions($solarVoltageConditions);
        }

        return $ledConditions;
    }

    /**
     * @param  array $conditions
     * @return LedBatteryVoltageConditions
     */
    public function createBatteryVoltageConditions(array $conditions)
    {
        $bvc = new LedBatteryVoltageConditions();

        $active = $this->arrayExtractor->extractValueForKey('active', $conditions);
        if (null !== $active) {
            $bvc->active = $active;
        }

        $lowerThreshold = $this->arrayExtractor->extractValueForKey('lowerThreshold', $conditions);
        if (null !== $lowerThreshold) {
            $bvc->lowerThreshold = $lowerThreshold;
        }

        $upperThreshold = $this->arrayExtractor->extractValueForKey('upperThreshold', $conditions);
        if (null !== $upperThreshold) {
            $bvc->upperThreshold = $upperThreshold;
        }

        return $bvc;
    }

    /**
     * @param  array $conditions
     * @return LedSolarVoltageConditions
     */
    public function createSolarVoltageConditions(array $conditions)
    {
        $svc = new LedSolarVoltageConditions();

        $active = $this->arrayExtractor->extractValueForKey('active', $conditions);
        if (null !== $active) {
            $svc->active = $active;
        }

        $lowerThreshold = $this->arrayExtractor->extractValueForKey('lowerThreshold', $conditions);
        if (null !== $lowerThreshold) {
            $svc->lowerThreshold = $lowerThreshold;
        }

        $upperThreshold = $this->arrayExtractor->extractValueForKey('upperThreshold', $conditions);
        if (null !== $upperThreshold) {
            $svc->upperThreshold = $upperThreshold;
        }

        return $svc;
    }
}
