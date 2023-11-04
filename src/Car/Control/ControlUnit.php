<?php

namespace Pr2\Car\Control;

use Pr2\Car\Elements\Battery;
use Pr2\Car\Elements\Doors;

class ControlUnit
{
    public Battery $battery;
    public Doors $doors;

    public bool $isAllertOn = false;

    public function __construct()
    {
        $this->battery = new Battery();
        $this->doors = new Doors();
    }
    
    public function diagnostics(): bool
    {
        $doors =  $this->doors->isClosingDoors();
        $battery = $this->battery->charge();

        var_dump ([$doors, $battery]);
        
        if ($doors == "The doors are closed" && $battery == "The charge is good") {
            return true;
        } else {
            return false;
        }
    }
        public function canSetAlertOn(): bool
        {
            $doors = $this->doors->isClosingDoors();  

            if ($doors == "The doors are closed") {
                return true;
            } else {
                return false;
            }
        }
}

