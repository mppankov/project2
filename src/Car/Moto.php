<?php

namespace Pr2\Car;

use Pr2\Car\Truck;

class Moto extends Truck
{
    public string $equipment;

    public function __construct(int $engine, int $capacity, string $equipment)
    {
        parent::__construct($engine, $capacity);
        $this->equipment = $equipment;
    }
    public function toString(): string
    {
        return "door: " . $this->door . "\nengine: " . $this->engine. "\ncapacity: " . $this->capacity . "\nequipment: " . $this->equipment;

    }
}