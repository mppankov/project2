<?php

namespace Pr2\Car;

class Truck extends Car
{
    public int $wheel = 6;
    public int $capacity;

    public function __construct(int $engine,int $door, int $capacity)
    {
        parent::__construct($engine, $door);
        $this->capacity = $capacity;
    }
    public function toString(): string
    {
        return "wheel: " . $this->wheel . "\nengine: " . $this->engine. "\ndoor " . $this->door . "\ncapacity: " . $this->capacity;

    }
}