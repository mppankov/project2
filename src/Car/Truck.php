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
}