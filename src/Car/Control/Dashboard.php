<?php

namespace Pr2\Car\Control;


class Dashboard
{
    
    public function displayEngineStatus(bool $status): void
    {

        if ($status === true)
        {
            var_dump ("the engine is running");
        } else {
            var_dump ("the engine is not running");
        }
    }
    public function displayEngineOil(int $oilLevel): void
    {
         var_dump ("Oil level - {$oilLevel}%");
    }
















    /*
    public Doors $doors;
    public Battery $battery;
    public ControlUnit $controlUnit;

    public function __construct()
    {
        $this->doors = new Doors();
        $this->battery = new Battery();
        $this->controlUnit = new ControlUnit();
    }

    public function doorsStatus(): void
    {
        $doors = $this->doors->isClosingDoors();

        if($doors == true)
        {
            var_dump ("The doors are closed");
        } else {
            var_dump ("The doors are not closed");
        }
    }
    public function batteryStatus(): void
    {
        $charge = $this->battery->charge();

        if($charge == true)
        {
            var_dump ("The charge is normal");
        } else {
            var_dump ("Battery charge - {$charge}%");
        }
    }
    public function alarmStatus(): void
    {
        $alarm = $this->battery->charge();

        if($alarm == true)
        {
            var_dump ("The alarm is on");
        } else {
            var_dump ("the alarm is off");
        }
    }
    */
}