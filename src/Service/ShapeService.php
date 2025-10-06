<?php

namespace App\Service;

use App\Entity\Circle;
use App\Entity\Rectangle;
use Doctrine\ORM\EntityManagerInterface;

class ShapeService
{
    private $rectangleRepository;
    private $circleRepository;

    public function __construct(
        EntityManagerInterface $rectangleRepository,
        EntityManagerInterface $circleRepository
    )
    {
        $this->rectangleRepository = $rectangleRepository;
        $this->circleRepository = $circleRepository;
    }

    
    public function findAllShapes(): array
    {
        /** @var Rectangle[] $rectangles */
        $rectangles = $this->rectangleRepository->getRepository(Rectangle::class)->findAllRectangles();
        /** @var Circle[] $circles */
        $circles    = $this->circleRepository->getRepository(Circle::class)->findAllCircles();
        
        return [
            'rectangles' => $rectangles,
            'circles'    => $circles,
        ];
    }
}