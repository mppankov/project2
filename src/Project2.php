<?php

//declare(strict_types=1);

//use Pr2\Car\Aggregates\Engine;
//use Pr2\Car\Car;
//use Pr2\Car\Control\AlarmSystem;
//use Pr2\Car\Control\ControlUnit;
//use Pr2\Car\Control\Dashboard;
//use Pr2\Car\Elements\Battery;
//use Pr2\Car\Elements\Doors;
//use Pr2\Shapes\Circle;
//use Pr2\Shapes\Rectangle;
//use Pr2\Shapes\Square;
//use Pr2\Shapes\SquareInterface;
use Pr2\WorkingWithClasses\Lesson;
use Pr2\WorkingWithClasses\PaidLesson;

require_once __DIR__.'/../vendor/autoload.php';


/*
$engine = new Engine();
$doors = new Doors();
$battery = new Battery();
$alarmSystem = new AlarmSystem();
$controlUnit = new ControlUnit();
$dashboard = new Dashboard();
$car = new Car($controlUnit, $engine, $alarmSystem, $battery);
*/

$lesson = new Lesson('Урок о наследовании в PHP', 'Лол, кек, чебурек', 'Ложитесь спать, утро вечера мудренее');
var_dump($lesson);




$paidLesson = new PaidLesson('Урок о наследовании в PHP', 'Лол, кек, чебурек', 'Ложитесь спать, утро вечера мудренее', 99.90);
var_dump($paidlesson);




/*
    $objects = [
        new Square(5),
        new Rectangle(2, 4),
        new Circle(5)];


    foreach ($objects as $object) {
        if ($object instanceof SquareInterface) {
            var_dump ("Объект класса " . get_class($object) . 
            " реализует интерфейс CalculateSquare. Площадь: " . $object->calculateSquare() . "\n");
        }
    }
*/
   
