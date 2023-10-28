<?php

namespace Pr2\Car;

class Car extends Bike
{
    
    public int $door;
    public int $wheel = 4;

    public function __construct (int $engine, int $door)
    {
        parent::__construct($engine);
        $this->door = $door;
    }
    public function toString(): string
    {
        return "wheel: " . $this->wheel . "\nengine: " . $this->engine. "\ndoor: " . $this->door;

    }
}