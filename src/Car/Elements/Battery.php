<?php

namespace Pr2\Car\Elements;

class Battery
{
    public function charge(): string
    {
        $charge = rand(0, 100);

        if ($charge > 40)
        {
            return "The charge is good";
        } else {
            return "The battery is {$charge}%";
        }
    }
}