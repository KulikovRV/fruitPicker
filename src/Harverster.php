<?php

namespace App;

class Harverster
{
    private $garden;
    private $harvestedFruits = [];
    private $sortedFruits = [];

    public function __construct($garden)
    {
        $this->garden = $garden;
    }

    public function getHarvestedFruits()
    {
        return $this->harvestedFruits;
    }

    public function getSortedFruits()
    {
        return $this->sortedFruits;
    }

    public function harvestAllFruits()
    {
        $trees = $this->garden->getTrees();
        foreach ($trees as $tree) {
            $fruits = $tree->getFruits();
            $countFruits = count($fruits) - 1;
            while ($countFruits >= 0) {
                $this->harvestedFruits[] = $tree->removeFruit();
                $countFruits--;
            }
        }
    }

    public function sortHarvestedFruits()
    {
        foreach ($this->harvestedFruits as $fruit) {
            switch ($fruit->getName()) {
                case 'apple':
                    $this->sortedFruits['apple'][] = $fruit;
                    break;
                case 'pear':
                    $this->sortedFruits['pear'][] = $fruit;
                    break;
            }
        }
    }
}
