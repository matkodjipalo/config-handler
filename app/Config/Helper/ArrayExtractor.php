<?php

namespace Config\Helper;

use Symfony\Component\Yaml\Yaml;

use Config\Factory\ConditionsFactory;
use Config\Model\Config;

class ArrayExtractor
{
    /**
     * Za zadani niz traži vrijednost na temelju proslijeđenog ključa.
     *
     * @param  string $key
     * @param  array $config
     * @return mixed Vraća vrijednost ključa ili false ako ključ ne postoji u nizu
     */
    public function extractValueForKey($key, array $config)
    {
        if (isset($config[$key])) {
            return $config[$key];
        }

        $this->logError("Nije moguće pronaći vrijednost za ključ ".$key);

        return null;
    }

    /**
     * @param string $error
     */
    private function logError($error)
    {
        echo $error . '<br>';
    }
}
