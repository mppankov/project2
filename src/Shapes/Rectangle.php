<?php

namespace Pr2\Shapes;

use Pr2\Utils\CalculateSquare;

class Rectangle implements CalculateSquare
{
    private $x;
    Private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function calculateSquare(): float
    {
        return $this->x * $this->y;
    }
}