<?php

namespace Pr2\Car;

class Truck extends Car
{
    public int $capacity;

    public function __construct(int $engine, int $capacity)
    {
        parent::__construct($engine);
        $this->capacity = $capacity;
    }
    public function toString(): string
    {
        return "door: \n" . $this->door . "engine: \n" . $this->engine. "engine: \n" . $this->capacity;

    }
}