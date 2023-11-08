<?php

namespace Pr2\Car\Aggregates;


class Engine
{

    public bool $isRunning = false;


    public function Start(): void
    {
        $this->isRunning = true;
    }
    public function stop(): void
    {
        $this->isRunning = false;
    }
}