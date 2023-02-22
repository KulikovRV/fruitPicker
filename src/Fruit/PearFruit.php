<?php

namespace App\Fruit;

use App\Fruit\Fruit;

class PearFruit extends Fruit
{
    private $name = "pear";

    public function getName()
    {
        return $this->name;
    }
}
