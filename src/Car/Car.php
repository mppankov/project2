<?php

namespace Pr2\Car;


use Pr2\Car\Control\ControlUnit;
use Pr2\Car\Aggregates\Engine;
use Pr2\Car\Control\AlarmSystem;
use Pr2\Car\Elements\Battery;


class Car
{
    public ControlUnit $controlUnit;
    public Engine $engine;
    public AlarmSystem $alarmSystem;
    public Battery $battery;

    // конструктор 
    public function __construct(
        ControlUnit $controlUnit,
        Engine $engine,
        AlarmSystem $alarmSystem,
        Battery $battery)
    {
        $this->controlUnit = $controlUnit;
        $this->engine = $engine;
        $this->alarmSystem = $alarmSystem;
        $this->battery = $battery;   
    }


    public function start(): void
    {
           
        if ($this->controlUnit->checkEngine($this->engine,$this->alarmSystem,$this->battery) === true)
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
