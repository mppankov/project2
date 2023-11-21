<?php

namespace Pr2\Shapes;

use Pr2\Utils\CalculateSquare;

class Circle implements CalculateSquare
{
    const PI = 3.1416;

    private $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function calculateSquare(): float
    {
        $pi = 3.1416;
        return self::PI * ($this->r ** 2);
    }
}