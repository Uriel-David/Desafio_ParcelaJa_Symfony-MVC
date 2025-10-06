<?php

namespace App\DTO;

class RectangleDTO
{
    public $name;
    public $width;
    public $length;
    public $area;

    public function __construct(
        string $name,
        float $width,
        float $length,
        float $area
    )
    {
        $this->name     = $name;
        $this->width    = $width;
        $this->length   = $length;
        $this->area     = $area;
    }
}