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
            $this->goodDetail++;
            return true;
        } else 
        {
            $this->badDetail++;
            return false;
        }
    }
    public function getSuccessRate(): float
    {
         return 100  / ($this->goodDetail + $this->badDetail) * $this->goodDetail / 100;
    }
}
