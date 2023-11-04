<?php

namespace Pr2\Car;

use Pr2\Car\Aggregates\Engine;
use Pr2\Car\Control\AlarmSystem;

class Car
{
    public Engine $engine;
    public AlarmSystem $alarmSystem;

    public function __construct()
    {
        $this->engine = new Engine();
        $this->alarmSystem = new AlarmSystem();
    }

    public function isStartingTheEngine()
    {
        var_dump ($this->engine->isEngineCondition());
    }
    public function isPutAlarm()
    {
        var_dump ($this->alarmSystem->securityStatus());
    }
}