<?php

namespace App\Garden;

class Garden
{
    private $trees;

    public function __construct($trees = [])
    {
        $this->trees = $trees;
    }

    public function getTrees()
    {
        return $this->trees;
    }

    public function addNewTrees($newTrees)
    {
        $this->trees = array_merge($this->trees, $newTrees);
    }
}
