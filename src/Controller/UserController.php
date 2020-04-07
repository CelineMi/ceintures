<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/eleves")
 */
class UserController
{
    /**
     * @Route("/", name="student")
     */
    public function index()
    {
        //afficher toute la liste des éleves
    }

    /**
     * @Route("/update/{id}", name="updateStudent")
     */
    public function update()
    {
        // mise à jour d'un élève via le bouton valider
    }

    /**
     * @Route("/delete/{id}", name="deleteStudent")
     */
    public function delete()
    {
        // suppression d'un élève via le bouton valider
    }
    /**
     * @Route("/create", name="createStudent")
     */
    public function create()
    {
        // suppression d'un élève via le bouton
    }


}