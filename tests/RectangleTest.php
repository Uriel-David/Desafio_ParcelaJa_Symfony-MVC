<?php

namespace App\Tests;

use App\Entity\Rectangle;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    public function testRectangleAreaCalculation(): void
    {
        $rectangle = new Rectangle();
        $rectangle->setWidth(10);
        $rectangle->setLength(5);

        $this->assertEquals(50, $rectangle->getArea());
    }
}
