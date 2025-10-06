<?php

namespace App\Mapper;

use App\Entity\Circle;
use App\DTO\CircleDTO;

class CircleMapper
{
    public static function toDTO(Circle $circle): CircleDTO
    {
        return new CircleDTO(
            $circle->getName(),
            $circle->getRadius(),
            pi() * pow($circle->getRadius(), 2)
        );
    }
}