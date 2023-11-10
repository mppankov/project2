<?php

namespace Pr2\Car;

use Pr2\Car\Aggregates\Engine;
use Pr2\Car\Control\ControlUnit;
use Pr2\Car\Control\Dashboard;

class Car
{
    public Engine $engine;
    public ControlUnit $controlUnit;

    public function __construct(Engine $engine, ControlUnit $controlUnit)
    {
        $this->engine = $engine;
        $this->controlUnit = $controlUnit;
        
    }
    public function start(): void
    {
        $this->engine->start();
    }
    public function stop(): void
    {
        $this->engine->stop();
    }
    public function learnConditionEngine()
    {
        $this->controlUnit->checkEngineCondition($this->engine->isRunning);
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
