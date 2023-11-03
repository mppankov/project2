<?php

namespace Pr2\Car;

use Pr2\Car\Aggregates\Engine;
use Pr2\Car\Elements\Doors;
use Pr2\Car\Elements\Starter;

class Car
{
    public Doors $doors;
    public Starter $starter;
    public Engine $engine;
    public function __construct()
    {
        $this->doors = new Doors();
        $this->starter = new Starter();
        $this->engine = new Engine();
    }

    public function carCondition()
    {
        $doors = $this->doors->isClosingDoors();
        $engineCondition = $this->engine->engineCondition($this->starter->toStart($doors));

        var_dump ($doors);
        var_dump ($engineCondition);
    }
}