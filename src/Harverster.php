<?php

namespace App;

class Harverster 
{
    private $garden;
    private $harvestedFruits = [];

    public function __construct($garden)
    {
        $this->garden = $garden;
    }

    public function getHarvestedFruits()
    {
        return $this->harvestedFruits;
    }

    public function harvestAllFruits()
    {
        $trees = $this->garden->getTrees();
        foreach ($trees as $tree) {
            $fruits = $tree->getFruits();
            $countFruits = count($fruits) - 1;
            while($countFruits >= 0) {
                $this->harvestedFruits[] = $tree->removeFruit();
                $countFruits--;
            }
        }
    }
}