<?php

namespace Pr2\Zavod;

use Pr2\Zavod\Departments\Production;
use Pr2\Zavod\Departments\QualityControl;

class Zavod
{
    public Production $production; 
    public QualityControl $qualityControl;

    public function __construct()
    {
        $this->production = new Production();
        $this->qualityControl = new QualityControl();
    }
    public function getDetails(int $count): array
    {
        $res = [];
        while (count($res) < $count)
        {
            $detail = $this->production->make();
            if($this->qualityControl->isGoodDetail($detail))
            {
                $res[] = $detail;
            }
        }
        return $res;
    }
}