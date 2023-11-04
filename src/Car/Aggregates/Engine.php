<?php

namespace Pr2\Car\Aggregates;

use Pr2\Car\Elements\ControlUnit;

class Engine
{
    public ControlUnit $controlUnit;

    

    public function isEngineCondition(): string
    {
        $controlUnit = $this->controlUnit->diagnostics();

        if ($controlUnit == "system ok")
        {
            return "system ok\nThe engine is running";
        } else {
            return "{$controlUnit}";
        }
    }
}