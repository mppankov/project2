<?php

namespace Pr2\Car;

use Pr2\Car\Aggregates\Engine;

class Car
{
    public Engine $engine;

    public function __construct()
    {
        $this->engine = new Engine();
    }

    public function isStartingTheEngine()
    {
        var_dump ($this->engine->isEngineCondition());
    }
}