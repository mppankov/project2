<?php

namespace Pr2\Car;

class Bike
{
    public int $wheel = 2;
    public int $engine;

    public function __construct(int $engine)
    {
        $this->engine = $engine;
    }
    public function toString(): string
    {
        return "wheel: " . $this->wheel . "\nengine: " . $this->engine;
    }

}

