<?php

namespace App\Fruit;

use App\Fruit\Fruit;

class AppleFruit extends Fruit
{
    private $name = "apple";

    public function getName()
    {
        return $this->name;
    }
}
