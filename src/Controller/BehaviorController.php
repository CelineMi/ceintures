<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/comportement")
 */
class BehaviorController
{
    /**
     * @Route("/", name="behavior")
     */
    public function index()
    {
        //liste de élèves et de leur comportement

    }

    /**
     * @Route("/update/{week}/{id})", name="updateBehaviorStudent")
     */
    public function update()
    {
        // mise à jour d'un élève via le bouton valider
    }
}