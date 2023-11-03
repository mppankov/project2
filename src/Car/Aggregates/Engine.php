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
            return "Check the conditions car";
        }
    }
}