<?php

use Pr2\Wild\Animals\Boar;

require_once __DIR__.'/../vendor/autoload.php';

$b = new Boar();
echo $b->go();