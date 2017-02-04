<?php

namespace Config;

use Symfony\Component\Yaml\Yaml;

use Config\Factory\ConditionsFactory;
use Config\Model\Config;
use Config\Helper\ArrayExtractor;

class ConfigHandler
{
    /** @var ArrayExtractor */
    private $arrayExtractor;

    public function __construct()
    {
        $this->arrayExtractor = new ArrayExtractor();
    }

    /**
     * Na temelju konfiguracijskog filea stvara konfiguracijski objekt
     *
     * @param  string $configFilePath
     * @return Config
     */
    public function createConfigFromFile($configFilePath)
    {
        $config = new Config();

        $configArray = $this->loadFile($configFilePath);

        // puklo je učitavanje filea, vraća se defaultni config
        if (null === $configArray) {
            return $config;
        }

        $ssid = $this->arrayExtractor->extractValueForKey('SSID', $configArray);
        if (null !== $ssid) {
            $config->ssid = $ssid;
        }

        $token = $this->arrayExtractor->extractValueForKey('token', $configArray);
        if (null !== $token) {
            $config->token = $token;
        }

        $conditionsArray = $this->arrayExtractor->extractValueForKey('conditions', $configArray);
        if (null !== $conditionsArray) {
            $config->conditions = (new ConditionsFactory())->createConditions($conditionsArray);
        }

        return $config;
    }

    /**
     * Učitava yaml file na određenoj lokaciji.
     *
     * @param  string $configFilePath
     * @return mixed Učitani file u obliku nizu ili false ako nije moguće učitati file.
     */
    private function loadFile($configFilePath)
    {
        try {
            $configArray = Yaml::parse(file_get_contents($configFilePath));
        } catch (\Exception $e) {
            $this->logError();

            return false;
        }

        return $configArray;
    }

    /**
     * @param string $error
     */
    private function logError($error)
    {
        echo $error . '<br>';
    }
}
