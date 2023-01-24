<?php

namespace App;

use App\Fruit;

class PearFruit extends Fruit
{
    private $name = "pear";
    
    public function getName()
    {
        return $this->name;
    }
}