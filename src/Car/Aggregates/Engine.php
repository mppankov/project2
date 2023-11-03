<?php

namespace Pr2\Car\Aggregates;

class Engine
{
    public function engineCondition($accessStart): string
    {
        if ($accessStart == true)
        {
            return "The engine is running";
        } else {
            return "The engine is not running \nCheck the conditions car";
        }
    }
}