<?php

namespace Php\Package\Tests;

use PHPUnit\Framework\TestCase;
use function Php\Package\customSum;

class FruitTest extends TestCase
{
    public function testGetCustomSum(): void
    {
        $res1 = customSum(1, 1);
        $res2 = customSum(1, 2);
        $res3 = customSum(1, 3);


        $this->assertEquals(2, $res1);
        $this->assertEquals(3, $res2);
        $this->assertEquals(4, $res3);
    }
}