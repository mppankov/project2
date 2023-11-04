<?php

namespace Pr2\Car\Aggregates;

use Pr2\Car\Control\ControlUnit;

class Engine
{
    public ControlUnit $controlUnit;
    

    public function __construct()
    {
        $this->controlUnit = new ControlUnit();
    }

    public function isEngineCondition(): string
    {
        $controlUnit = $this->controlUnit->diagnostics();

        if ($controlUnit == "system ok") {
            return "system ok\nThe engine is running";
        } else {
            return "{$controlUnit}";
        }
    }
}