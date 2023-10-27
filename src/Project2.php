<?php

use Pr2\Utils\StringUtils;
use Pr2\Wild\Animals\Boar;
use Pr2\Wild\Trees\AppleTree;

require_once __DIR__.'/../vendor/autoload.php';

$b = new Boar();
$t = new AppleTree();
$u = new StringUtils();

echo $u->SomeTimes(3, "class");
echo $b->go();
echo $t->go();