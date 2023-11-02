<?php

namespace Pr2\Zavod\Departments;

class Production
{
    public function make(): string
    {
        if(rand(0, 100) < 80){
         return "GoodDetail";
        } else {
         return "BadDetail";
        }
    }
}