<?php

namespace Pr2\Shapes;

class Rectangle implements SquareInterface
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