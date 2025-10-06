<?php

namespace App\Controller;

use App\Service\ShapeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShapeController extends AbstractController
{
    private $shapeService;

    public function __construct(ShapeService $shapeService)
    {
        $this->shapeService = $shapeService;
    }


    /**
     * Return list of shapes (Rectangles and Circles)
     * 
     * @return Response
     */
    public function list(): Response
    {
        $shapes = $this->shapeService->findAllShapes();

        return $this->render('shape/list.html.twig', [
            'rectangles' => $shapes['rectangles'],
            'circles'    => $shapes['circles'],
        ]);
    }
}
