<?php

namespace Pr2\Car\Control;

use Pr2\Car\Elements\Doors;

class AlarmSystem
{
    public Doors $doors;

    public function __construct()
    {
        $this->doors = new Doors();
    }
    public function securityStatus(): string
    {
        $doors = $this->doors->isClosingDoors();

        if ($doors == "The doors are closed") {
            return "The alarm is on";
        } else {
            return "Close the door";
        }
    }
}