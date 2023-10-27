<?php

namespace Pr2\Car;

class Car
{
    public int $door = 2;
    public int $engine;

    public function __construct(int $engine)
    {
        $this->engine = $engine * 2;
    }
    public function toString(): string
    {
        return "door: " . $this->door . "; engine: " . $this->engine;
    }

}

