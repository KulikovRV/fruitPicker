<?php

namespace App\Fruit;

class Fruit
{
    private $weigh;

    public function __construct($weight)
    {
        $this->weigh = $weight;
    }

    public function getWeigh()
    {
        return $this->weigh;
    }
}
