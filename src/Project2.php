<?php

use Pr2\Car\Aggregates\Engine;
use Pr2\Car\Car;
use Pr2\Car\Control\ControlUnit;
use Pr2\Car\Control\Dashboard;
use Pr2\Car\Elements\Battery;
use Pr2\Car\Elements\Doors;

require_once __DIR__.'/../vendor/autoload.php';

$engine = new Engine();
$doors = new Doors();
$battery = new Battery();
$controlUnit = new ControlUnit();
$dashboard = new Dashboard();
$car = new Car($controlUnit, $engine, $doors, $battery);

$car->battery->chargeTheBattery();
$car->engine->pourOil();
$car->doors->closeTheDoors();
$car->start();

























/*
$controlUnit = new ControlUnit();
$engine = new Engine();
$doors = new Doors();
$battery = new Battery();



var_dump ($doors->isClosingDoors());
$engine->start();
var_dump ($engine->isRunning);
var_dump ($battery->charge());
*/





