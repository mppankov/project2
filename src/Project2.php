<?php

use Pr2\Zavod\Zavod;
use Pr2\Car\Bike;
use Pr2\Car\Car;
use Pr2\Car\Truck;
use Pr2\Utils\StringUtils;
use Pr2\Wild\Animals\Boar;
use Pr2\Wild\Trees\AppleTree;

require_once __DIR__.'/../vendor/autoload.php';

$b = new Boar();
$t = new AppleTree();
$u = new StringUtils();
$c = new Bike(1);
$q = new Car(1, 2);
$tr = new Truck(1, 2, 10);
$zavod = new Zavod();

var_dump ($zavod->getDetails(1000));

var_dump ($zavod->qualityControl->getSuccessRate());