<?php

namespace Pr2\Car\Aggregates;


class Engine
{

    public bool $isRunning = false;
    public int $oilLevel = 70;


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
}