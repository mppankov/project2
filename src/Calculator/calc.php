<?php

if (empty($_GET))
    {
        return "Ничего не передано!";
    }
if (empty($_GET['operation']))
    {
        return "Не передана операция";
    }
if (!isset($_GET['x1']) || !isset($_GET['x2']))
    {
        return "Не переданы аргументы";
    }

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];
$x1 = (float)$x1;
$x2 = (float)$x2;
$operation = $_GET['operation'];

if (is_numeric($x1) && is_numeric($x2))
{
    switch ($operation)
    {
        case '+':
            $result = $x1 + $x2;
            break;
        case '-':
            $result = $x1 - $x2;
            break;
        case '*':
            $result = $x1 * $x2;
            break;
        case '/':
            $result = $x2 != 0 ? ($x1 / $x2) : 'На ноль делить нельзя';
            break;
        default:
            return "Операция не поддерживается";
    }
} else {
    return 'Введите число';
}

$expression = $x1 . ' ' . $operation . ' ' . $x2 . ' = ';

return $expression . $result;