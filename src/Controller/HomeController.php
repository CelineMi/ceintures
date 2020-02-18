<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DomainRepository;

class HomeController extends AbstractController
{

    public function __construct(DomainRepository $domainRepository)
    {
        $this->domainRepository = $domainRepository;
    }

    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $domains = $this->domainRepository->findAll();

        return $this->render('home/index.html.twig', [
            'domains' => $domains
        ]);
    }
}
