<?php

namespace App\Mapper;

use App\Entity\Rectangle;
use App\DTO\RectangleDTO;

class RectangleMapper
{
    public static function toDTO(Rectangle $rectangle): RectangleDTO
    {
        return new RectangleDTO(
            $rectangle->getName(),
            $rectangle->getWidth(),
            $rectangle->getLength(),
            $rectangle->getWidth() * $rectangle->getLength()
        );
    }
}
