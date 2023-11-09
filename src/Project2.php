<?php

use Pr2\Car\Control\ControlUnit;


require_once __DIR__.'/../vendor/autoload.php';


$dash = new ControlUnit;


var_dump ($this->dash->diagnostics());

