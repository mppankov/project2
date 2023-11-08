<?php

namespace Pr2\Car\Elements;

class Doors
{
   public function isClosingDoors(): bool
   {
        if (rand(3, 4) === 4)
        {
            return true;
        } else {
            return false;
        }
   }
}