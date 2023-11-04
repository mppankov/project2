<?php

namespace Pr2\Car\Elements;

class Doors
{
   public function isClosingDoors(): string
   {
        if (rand(0, 4) == 4)
        {
            return "The doors are closed";
        } else {
            return "The doors are not closed";
        }
   }
}