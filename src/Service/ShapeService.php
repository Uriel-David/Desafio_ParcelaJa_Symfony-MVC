<?php

namespace App\Service;

use App\Mapper\CircleMapper;
use App\Mapper\RectangleMapper;
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

        $rectangleDTOs = array_map([RectangleMapper::class, 'toDTO'], $rectangles);
        $circleDTOs = array_map([CircleMapper::class, 'toDTO'], $circles);

        return [
            'rectangles' => $rectangleDTOs,
            'circles'    => $circleDTOs,
        ];
    }
}