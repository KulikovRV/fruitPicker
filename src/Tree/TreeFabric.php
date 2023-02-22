<?php

namespace App\Fabric;

use App\Tree\AppleTree;
use App\Tree\PearTree;
use App\Fruit\PearFruit;
use App\Fruit\AppleFruit;

function createTrees($treeTypeAndCount)
{
    $trees = [];
    foreach ($treeTypeAndCount as $treeType => $count) {
        switch ($treeType) {
            case 'apple':
                while ($count > 0) {
                    $id = uniqid();
                    $appleCountFruits = random_int(40, 50);
                    $appleFruits = createFruits($appleCountFruits, $treeType);
                    $trees[] = new AppleTree($id, $appleFruits);
                    $count--;
                }
                break;
            case 'pear':
                while ($count > 0) {
                    $id = uniqid();
                    $pearCountFruits = random_int(0, 20);
                    $pearFruits = createFruits($pearCountFruits, $treeType);
                    $trees[] = new PearTree($id, $pearFruits);
                    $count--;
                }
                break;
        }
    }

    return $trees;
}

function createFruits($count, $fruitType)
{
    $fruits = [];
    switch ($fruitType) {
        case 'apple':
            while ($count > 0) {
                $weigh = random_int(150, 180);
                $fruits[] = new AppleFruit($weigh);
                $count--;
            }
            break;
        case 'pear':
            while ($count > 0) {
                $weigh = random_int(130, 170);
                $fruits[] = new PearFruit($weigh);
                $count--;
            }
            break;
    }

    return $fruits;
}
