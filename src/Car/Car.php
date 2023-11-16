<?php

namespace Pr2\Car;


use Pr2\Car\Control\ControlUnit;
use Pr2\Car\Aggregates\Engine;
use Pr2\Car\Elements\Battery;
use Pr2\Car\Elements\Doors;

class Car
{
    public ControlUnit $controlUnit;
    public Engine $engine;
    public Doors $doors;
    public Battery $battery;

    public function __construct(
     ControlUnit $controlUnit,
      Engine $engine,
       Doors $doors,
        Battery $battery)
    {
        $this->controlUnit = $controlUnit;
        $this->engine = $engine;
        $this->doors = $doors;
        $this->battery = $battery;   
    }


    public function start(): void
    {
           
        if ($this->controlUnit->checkEngine(
            $this->engine,
             $this->doors,
              $this->battery) === true)
        {
            $this->engine->start();
            var_dump ("the engine started");
        } else {
            var_dump ("error");
        }
    }
    public function stop(): void
    {
        $this->engine->stop();
    }
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   /* 
    public function startingTheEngine(): void
    {
        $status = $this->controlUnit->preLaunchCheck();

        if ($status == true)
        {
            $this->engine->start();
            var_dump ("The engine started");
        } else {
            var_dump ($this->controlUnit->diagnostics());
        }
    }
    public function stoppedTheEngine(): void
    {
        $this->engine->stop();
        var_dump ("The engine is stopped");
    }

    public function isPutAlarm(): bool
    {
        return $this->controlUnit->canSetAlertOn();
    }
*/
}
