<?php

namespace Pr2\Car\Control;

use Pr2\Car\Elements\Battery;
use Pr2\Car\Elements\Doors;

class ControlUnit
{
    public Battery $battery;
    public Doors $doors;
    public Dashboard $dashBoard;

    public bool $isAlertOn = false;

    public function __construct()
    {
        $this->battery = new Battery();
        $this->doors = new Doors();
        $this->dashBoard = new Dashboard();
    }
    
    public function preLaunchCheck(): bool
    {
        $doors = $this->doors->isClosingDoors();
        $battery = $this->battery->charge();
        
        if ($doors == true && $battery == true) {
            return true;
        } else {
            return false;
        }
    }
    public function canSetAlertOn(): bool
    {
        $doors = $this->doors->isClosingDoors();  

        if ($doors == true) {
            return true;
        } else {
            return false;
        }
    }
    public function diagnostics(): string
    {
        $doors1 = $this->dashBoard->doorsStatus();
        $battery1 = $this->dashBoard->batteryStatus();
        $alarm1 = $this->dashBoard->alarmStatus();

        return "Diagnostics:\n1-{$doors1}\n{$battery1}\n{$alarm1}";
    }


}

