<?php

namespace Pr2\Car\Control;

use Pr2\Car\Aggregates\Engine;
use Pr2\Car\Elements\Battery;
use Pr2\Car\Elements\Doors;

class ControlUnit
{

    public function checkEngine(Engine $engine, Doors $doors, Battery $battery): bool
    {

        if ($engine->isRunning === false && 
            $engine->oilLevel >= 90 && 
            $doors->openDoors === 0 && 
            $battery->charge >= 70)
        {
            return true;  
        } else {
            return false;
        }
    }
    


































    /*
    public Battery $battery;
    public Doors $doors;
    public Dashboard $dashboard;

    public bool $isAlertOn = false;

    public function __construct()
    {
        $this->battery = new Battery();
        $this->doors = new Doors();
        $this->dashboard = new Dashboard();
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
    public function diagnostics(): void
    {
        $doors = $this->dashboard->doorsStatus();
        $battery = $this->dashboard->batteryStatus();
        $alarm = $this->dashboard->alarmStatus();

        var_dump ("Diagnostics:\n1-{$doors}\n{$battery}\n{$alarm}");
    }
   */ 
}

