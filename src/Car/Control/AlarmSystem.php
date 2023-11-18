<?php

namespace Pr2\Car\Control;

use Pr2\Car\Elements\Doors;

/* Наследование класса Doors
   Doors - родительский класс
   AlarmSystem - дочерний класс
   Наследование дает возможность использовать свойства и методы родительского класса
*/

class AlarmSystem extends Doors
{
    public $alarmStatus = false;

    public function isPutAlarm(): void
    {
        //$this используется в методе, если он был вызван в контексте объекта.
          $this->closeTheDoors();
          $this->alarmStatus = true;
    }
    public function isRemoveAlarm(): void
    {
        $this->openTheDoors();
        $this->alarmStatus = false;
    }
    public function isCarStarted()
    {
        $this->closeTheDoors();
        $this->alarmStatus = false;
    }
}