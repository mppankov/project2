<?php

namespace Pr2\Shapes;

class Square implements SquareInterface
{
    private $x;

    public function __construct(float $x)
    {
        $this->x = $x;
    }

    public function calculateSquare(): float
    {
        return $this->x ** 2;
    }
}