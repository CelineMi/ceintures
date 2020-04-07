<?php

namespace App\Controller;

use App\Entity\CompetenceBelt;
use App\Entity\User;
use App\Repository\SubDomainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Repository\CompetenceBeltRepository;
use App\Repository\CompetenceRepository;


/**
 * Class GrammaireController
 * @package App\Controller
 * @Route("/grammaire")
 */
class GrammaireController extends AbstractController
{

    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository,
                                CompetenceBeltRepository $competenceBeltRepository,
                                CompetenceRepository $competenceRepository,
                                SubDomainRepository $subDomainRepository
                                )
    {
        $this->userRepository = $userRepository;
        $this->competenceBeltRepository = $competenceBeltRepository;
        $this->competenceRepository = $competenceRepository;
        $this->subDomainRepository = $subDomainRepository;
    }

    /**
     * @Route("/", name="grammaire")
     */
    public function index()
    {
        $student = $this->userRepository->findByRole('student');
        $competenceBelt = $this->competenceBeltRepository->findAll();
        $subDomain = $this->subDomainRepository->findAll();
        return $this->render('grammaire/index.html.twig', [
            'students' => $student,
            'competenceBelts' => $competenceBelt,
            'subDomains' => $subDomain,
        ]);
    }

    /**
     * @Route("/update/{id}", name="updateGrammaireStudent")
     */
    public function update()
    {
        // mise à jour d'un élève via le bouton valider
    }

}
