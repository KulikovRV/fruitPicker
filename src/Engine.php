<?php

namespace App;

class Engine
{
    private $trees;
    private $harvestr;
    private $countHarverstedFruits;
    private $countHarverstedAppleFruit;
    private $countHarverstedPearFruit;

    public function __construct($trees, $harvestr)
    {
        $this->trees = $trees;
        $this->harvestr = $harvestr;
    }

    public function run()
    {
        $this->prepare();
        $this->input();
    }

    private function prepare()
    {
        $this->harvestr->harvestAllFruits();
        $harverstedFruits = $this->harvestr->getHarvestedFruits();

        $this->harvestr->sortHarvestedFruits($harverstedFruits);
        $sortedFruits = $this->harvestr->getSortedFruits();

        $this->countHarverstedFruits = count($harverstedFruits);
        $this->countHarverstedAppleFruit = count($sortedFruits['apple']);
        $this->countHarverstedPearFruit = count($sortedFruits['pear']);
    }

    private function input()
    {
        print_r("=================================\n");
        print_r("Всего собрано {$this->countHarverstedFruits} фруктов. Из них: \n");
        print_r("- яблоки {$this->countHarverstedAppleFruit} шт.\n");
        print_r("- груши {$this->countHarverstedPearFruit} шт.\n");
        print_r("=================================\n");
    }
}
