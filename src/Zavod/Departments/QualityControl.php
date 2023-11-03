<?php

namespace Pr2\Zavod\Departments;

class QualityControl
{
    
    public int $goodDetails = 0;
    public int $badDetails = 0;
    public function isGoodDetail(string $detail): bool
    {
        if ($detail == "GoodDetail")
        {
            $this->goodDetails++;
            return true;
        } else 
        {
            $this->badDetails++;
            return false;
        }
    }
    public function getSuccessRate(): float
    {
         return 100  / ($this->goodDetails + $this->badDetails) * $this->goodDetails / 100;
    }
}
