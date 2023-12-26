<?php

class Cat
{
// свойства
    private $name;
    private $color;
    public $weight;
//конструктор
    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
// методы
    public function sayHello()
    {
        echo 'Привет! Меня зовут ' . $this->name . '.';
        echo "\n";
        echo 'Мой цвет ' . $this->color . '.';
    }
//setter
    public function setColor(string $color)
    {
        $this->color = $color;
    }
// getter
    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

$cat1 = new Cat('Cнежок', 'Белый');
$cat2 = new Cat('Барсик', 'Рыжий');
echo $cat1->sayHello();
echo "\n";
echo $cat2->sayHello();
echo "\n";