<?php

namespace Pr2\Car\Elements;

class Doors
{
    public int $closedDoors = 1;
    public int $openDoors = 3;

/*Модификатор protected (защищённый) 
разрешает доступ самому классу, наследующим его классам и родительским классам 

private (закрытый) ограничивает область видимости так, что только класс, 
где объявлен сам элемент, имеет к нему доступ.

так же является проявлением инкапсуляции*/
   protected function openTheDoors(): void
   {
    $this->closedDoors = 0;
    $this->openDoors = 4;
   }
   protected function closeTheDoors(): void
   {
    $this->closedDoors = 4;
    $this->openDoors = 0;
   }
}