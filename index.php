<?php

use Tests\Trikoder\Repository\DummyRepositoryTest;
use Tests\Trikoder\Model\DummyTest;
use Trikoder\Repository\DummyRepository;
use Trikoder\Model\Dummy;

require_once __DIR__.'/config/bootstrap.php';

echo 'START';

$dummyRepo = new DummyRepository();
$dummy = new Dummy();
$dummyRepoTest = new DummyRepository();
$dummyTest = new DummyTest();
