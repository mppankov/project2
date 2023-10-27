<?php

use Pr2\Car\Truck;
use Pr2\Car\Car;
use Pr2\Utils\StringUtils;
use Pr2\Wild\Animals\Boar;
use Pr2\Wild\Trees\AppleTree;

require_once __DIR__.'/../vendor/autoload.php';

$b = new Boar();
$t = new AppleTree();
$u = new StringUtils();
$c = new Car(2);
$tr = new Truck(2, 10);

echo $tr->toString();