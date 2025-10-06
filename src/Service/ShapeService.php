<?php

namespace App\Service;

use App\Repository\CircleRepository;
use App\Repository\RectangleRepository;

class ShapeService
{
    private $rectangleRepository;
    private $circleRepository;

    public function __construct(
        RectangleRepository $rectangleRepository,
        CircleRepository $circleRepository
    )
    {
        $this->rectangleRepository = $rectangleRepository;
        $this->circleRepository = $circleRepository;
    }

    
    public function findAllShapes(): array
    {
        $rectangles = $this->rectangleRepository->findAllRectangles();
        $circles    = $this->circleRepository->findAllCircles();
        
        return [
            'rectangles' => $rectangles,
            'circles'    => $circles,
        ];
    }
}