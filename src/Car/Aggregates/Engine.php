<?php

namespace Pr2\Car\Aggregates;


class Engine
{

    public bool $isRunning = false;
    
    private int $oilLevel = 60;


    public function start(): void
    {
        $this->isRunning = true;
    }
    public function stop(): void
    {
        $this->isRunning = false;
    }
    public function getOilLevel(): int
    {
        return $this->oilLevel;
    }
    // setOilLevel(int $level) - инкапсуляция
    public function pourOil()
    {
        $this->oilLevel = 100;
    }
}