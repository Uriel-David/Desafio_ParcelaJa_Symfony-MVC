<?php

namespace App\DTO;

class CircleDTO
{
    public $name;
    public $radius;
    public $area;

    public function __construct(
        string $name,
        float $radius,
        float $area
    )
    {
        $this->name     = $name;
        $this->radius   = $radius;
        $this->area     = $area;
    }
}