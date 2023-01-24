<?php

namespace App;

use App\Fruit;

class AppleFruit extends Fruit
{
    private $name = "apple";

    public function getName()
    {
        return $this->name;
    }
}
