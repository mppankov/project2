<?php

namespace Pr2\Car\Elements;

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

        switch (true)
        {
            case $doors == "The doors are closed":
            case $battery == "The charge is good":
                return "system ok";
            default:
                return "Diagnostics:\n{$doors}\n{$battery}";
        }
    }
}

