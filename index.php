<?php

use Config\ConfigHandler;

require_once __DIR__.'/config/bootstrap.php';

$configHandler = new ConfigHandler();

$config = $configHandler->createConfigFromFile(__DIR__.'/config/config.yml');

d($config);