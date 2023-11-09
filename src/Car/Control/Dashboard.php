<?php

namespace Pr2\Car\Control;

use Pr2\Car\Elements\Battery;
use Pr2\Car\Elements\Doors;

class Dashboard
{
    public Doors $doors;
    public Battery $battery;
    public ControlUnit $controlUnit;

    public function __construct()
    {
        $this->doors = new Doors;
        $this->battery = new Battery;
        $this->controlUnit = new ControlUnit;
    }

    public function doorsStatus(): string
    {
        $doors = $this->doors->isClosingDoors();

        if($doors == true)
        {
            return "The doors are closed";
        } else {
            return "The doors are not closed";
        }
    }
    public function batteryStatus(): string
    {
        $charge = $this->battery->charge();

        if($charge == true)
        {
            return "The charge is normal";
        } else {
            return "Battery charge - {$charge}%";
        }
    }
    public function alarmStatus(): string
    {
        $alarm = $this->controlUnit->canSetAlertOn();

        if($alarm == true)
        {
            return "The alarm is on";
        } else {
            return "the alarm is off";
        }
    }
}