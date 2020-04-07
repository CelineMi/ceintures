<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/eleves")
 */
class ParentsController
{
    /**
     * @Route("/", name="student")
     */
    public function index()
    {
        //afficher le détail d'un éleve
    }
}