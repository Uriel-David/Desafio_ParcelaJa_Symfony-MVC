<?php

namespace App\DataFixtures;

use App\Entity\Circle;
use App\Entity\Rectangle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ShapeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 3; $i++) {
            $rectangle = new Rectangle();
            $rectangle->setName('Rectangle ' . $i);
            $rectangle->setWidth(mt_rand(5, 20));
            $rectangle->setLength(mt_rand(5, 20));
            $manager->persist($rectangle);
        }

        for ($i = 1; $i <= 3; $i++) {
            $circle = new Circle();
            $circle->setName('Circle ' . $i);
            $circle->setRadius(mt_rand(3, 10));
            $manager->persist($circle);
        }

        $manager->flush();
    }
}
