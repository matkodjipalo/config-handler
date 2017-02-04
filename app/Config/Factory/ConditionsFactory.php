<?php

namespace Config\Factory;

use Symfony\Component\Yaml\Yaml;
use Config\Model\ConfigConditions;
use Config\Helper\ArrayExtractor;

/**
 * Servis za stvaranje konfiguracijskih uvjeta.
 */
class ConditionsFactory
{
    /** @var ArrayExtractor */
    private $arrayExtractor;

    public function __construct()
    {
        $this->arrayExtractor = new ArrayExtractor();
    }

    /**
     * Stvaranje objekta konfiguracijskih uvjeta na temelju niza konfiguracijskih podataka.
     * 
     * @param  array $conditionsArray
     * @return ConfigConditions
     */
    public function createConditions($conditionsArray)
    {
        $conditions = new ConfigConditions();

        $ledConditionsArray = $this->arrayExtractor->extractValueForKey('led', $conditionsArray);
        if (false !== $ledConditionsArray) {
            $conditions->ledConditions = (new LedConditionsFactory())->createConditions($ledConditionsArray);
        }

        $fanConditionsArray = $this->arrayExtractor->extractValueForKey('fan', $conditionsArray);
        if (false !== $fanConditionsArray) {
            $conditions->fanConditions = (new FanConditionsFactory())->createConditions($fanConditionsArray);
        }

        return $conditions;
    }
}
