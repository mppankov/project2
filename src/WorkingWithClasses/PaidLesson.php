<?php

namespace Pr2\WorkingWithClasses;

class PaidLesson extends Lesson
{

    protected $price;

    public function __construct(
        string $title, 
        string $text, 
        string $homework, 
        float $price)
    {
        parent::__construct($title, $text, $homework);
        $this->price = $price;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

}
