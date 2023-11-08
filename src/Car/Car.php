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

    public function StartingTheEngine()
    {
        $status = $this->controlUnit->preLaunchCheck();

        if ($status === true)
        {
            $this->engine->start();
        }
    }
    public function StoppedTheEngine()
    {
        $this->engine->stop();
    }

    public function isPutAlarm()
    {
        return ($this->controlUnit->canSetAlertOn());
    }
}