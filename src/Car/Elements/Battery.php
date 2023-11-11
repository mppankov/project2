<?php

namespace Pr2\Car\Elements;

class Battery
{
    public int $charge = 40;


    public function chargeTheBattery(): void
    {
        $this->charge = 100;
    }
    
}