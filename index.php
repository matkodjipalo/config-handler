<?php

use Tests\Trikoder\Repository\DummyRepositoryTest;
use Tests\Trikoder\Model\DummyTest;
use Trikoder\Repository\DummyRepository;
use Trikoder\Model\Dummy;

require_once __DIR__.'/config/bootstrap.php';

$x = array(10,2,4);
$y = array(1 => 2, 0 => 10, 2 => 4);
d($x == $y);