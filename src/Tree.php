<?php

namespace App;

class Tree
{
    private $id;
    private $fruits;

    public function __construct($id, $fruits = []) 
    {
        $this->id = $id;
        $this->fruits = $fruits;
    }

    public function getFruits()
    {
        return $this->fruits;
    }

    public function getId()
    {
        return $this->id;
    }

    public function removeFruit()
    {
        return array_pop($this->fruits);
    }
}