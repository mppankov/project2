<?php

namespace Pr2\Car\Elements;

class Doors
{
    public int $closedDoors = 1;
    public int $openDoors = 3;

   public function openTheDoors(): void
   {
    $this->closedDoors = 0;
    $this->openDoors = 4;
   }
   public function closeTheDoors(): void
   {
    $this->closedDoors = 4;
    $this->openDoors = 0;
   }
}