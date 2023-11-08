<?php

use Pr2\Car\Car;
use Pr2\Car\Control\Dashboard;
use Pr2\Zavod\Zavod;
use Pr2\Utils\StringUtils;
use Pr2\Wild\Animals\Boar;
use Pr2\Wild\Trees\AppleTree;

require_once __DIR__.'/../vendor/autoload.php';

$b = new Boar();
$t = new AppleTree();
$u = new StringUtils();
$zavod = new Zavod();
$carEngine = new Car();
$diagnostics = new Dashboard();



$this->carEngine->Diagnostics();