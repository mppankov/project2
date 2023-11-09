<?php

namespace Pr2\Car\Elements;

class Battery
{
    public function charge(): bool
    {
        $charge = rand(0, 100);

        if ($charge > 40)
        {
            return true;
        } else {
            return false;
        }
    }
    
}