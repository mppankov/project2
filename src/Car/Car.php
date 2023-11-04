<?php

namespace Pr2\Car;

use Pr2\Car\Aggregates\Engine;
use Pr2\Car\Control\ControlUnit;

class Car
{
    public Engine $engine;
    public ControlUnit $controlUnit;

    public function __construct()
    {
        $this->engine = new Engine();
        $this->controlUnit = new ControlUnit();
    }

    public function isStartingTheEngine()
    {
        var_dump ($this->engine->isEngineCondition());
    }
    public function isPutAlarm()
    {
        var_dump ($this->controlUnit->securityStatus());
    }
}