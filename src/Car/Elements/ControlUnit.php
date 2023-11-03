<?php

namespace Pr2\Car\Elements;

class Starter
{
    public function toStart(string $doors): bool
    {
        if ($doors == "The doors are closed")
        {
            return true;
        } else {
            return false;
        }
    }
}

