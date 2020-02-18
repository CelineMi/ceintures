<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Repository\CompetenceBeltRepository;
use App\Repository\StatusRepository;
use App\Repository\CompetenceRepository;

class GrammaireController extends AbstractController
{

    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository,
                                CompetenceBeltRepository $competenceBeltRepository,
                                StatusRepository $statusRepository,
                                CompetenceRepository $competenceRepository
                                )
    {
        $this->userRepository = $userRepository;
        $this->competenceBeltRepository = $competenceBeltRepository;
        $this->statusRepository = $statusRepository;
        $this->competenceRepository = $competenceRepository;
    }

    /**
     * @Route("/grammaire", name="grammaire")
     */
    public function index()
    {
        $student = $this->userRepository->findByRole('student');
        $competenceBelt = $this->competenceBeltRepository->findAll();
//        $status = $this->competenceRepository->find(1);
//        var_dump($status);
//        exit();
        return $this->render('grammaire/index.html.twig', [
            'students' => $student,
            'competenceBelts' => $competenceBelt,
//            'status' => $status
        ]);
    }
}
