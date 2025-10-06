<?php

namespace App\Tests;

use App\Entity\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function testCircleAreaCalculation(): void
    {
        $circle = new Circle();
        $circle->setRadius(3);

        $expectedArea = pi() * (3 ** 2);
        $this->assertEquals($expectedArea, $circle->getArea());
    }
}
