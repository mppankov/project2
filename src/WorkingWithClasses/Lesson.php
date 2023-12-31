<?php

namespace Pr2\WorkingWithClasses;

class Lesson extends Post
{
    protected $homework;

    public function __construct(
        string $title, 
        string $text, 
        string $homework)
    {
        parent::__construct($title, $text);
        $this->homework = $homework;
    }

    public function getHomework(): string
    {
        return $this->homework;
    }

    public function setHomework(string $homework): void
    {
        $this->homework = $homework;
    }
}


