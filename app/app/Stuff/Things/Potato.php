<?php

namespace App\Stuff\Things;

class Potato
{
    private $addWater = 0;


    public function water()
    {
        $this->addWater += 1;
        return $this;
    }

    public function hasGrown()
    {
        return $this->addWater >= 5;


    }


}