<?php

namespace Pr2\Car\Aggregates;


class Engine
{

    public bool $isRunning = false;
    //проявление инкапсуляции. запрет прямого доступа к свойству класса. доступ через геттер getOilLevel()
    // сеттером меняеться значение свойства
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