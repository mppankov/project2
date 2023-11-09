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

    public function startingTheEngine()
    {
        $status = $this->controlUnit->preLaunchCheck();

        if ($status == true)
        {
            $this->engine->start();
        }
    }
    public function stoppedTheEngine()
    {
        $this->engine->stop();
    }

    public function isPutAlarm()
    {
        return ($this->controlUnit->canSetAlertOn());
    }
}