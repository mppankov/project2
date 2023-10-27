<?php

namespace Pr2\Utils;

class StringUtils
{
    function someTimes(int $n, string $s)
    {
        while ($n > 0)
        {
            echo $s . "\n";
            $n--;
        }
    }
}