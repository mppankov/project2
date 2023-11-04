<?php

namespace Pr2\Car\ElectricalElements;

use Pr2\Car\Elements\Battery;
use Pr2\Car\Elements\Doors;

class ControlUnit
{
    public Battery $battery;
    public Doors $doors;
    public function __construct()
    {
        $this->battery = new Battery();
        $this->doors = new Doors();
    }
    public function diagnostics(): string
    {
        $doors =  $this->doors->isClosingDoors();
        $battery = $this->battery->charge();

        if ($doors == "The doors are closed" && $battery == "The charge is good") {
            return "system ok";
        } else {
            return "Diagnostics:\n-{$doors}\n-{$battery}";
        }
    }
}

