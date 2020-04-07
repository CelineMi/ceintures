<?php

namespace App\Controller;

use App\Entity\SubDomain;
use App\Form\SubDomainType;
use App\Repository\SubDomainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/sub/domain")
 */
class SubDomainController extends AbstractController
{
    /**
     * @Route("/", name="sub_domain_index", methods={"GET"})
     */
    public function index(SubDomainRepository $subDomainRepository): Response
    {
        return $this->render('sub_domain/index.html.twig', [
            'sub_domains' => $subDomainRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="sub_domain_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $subDomain = new SubDomain();
        $form = $this->createForm(SubDomainType::class, $subDomain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($subDomain);
            $entityManager->flush();

            return $this->redirectToRoute('sub_domain_index');
        }

        return $this->render('sub_domain/new.html.twig', [
            'sub_domain' => $subDomain,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sub_domain_show", methods={"GET"})
     */
    public function show(SubDomain $subDomain): Response
    {
        return $this->render('sub_domain/show.html.twig', [
            'sub_domain' => $subDomain,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="sub_domain_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SubDomain $subDomain): Response
    {
        $form = $this->createForm(SubDomainType::class, $subDomain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sub_domain_index');
        }

        return $this->render('sub_domain/edit.html.twig', [
            'sub_domain' => $subDomain,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sub_domain_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SubDomain $subDomain): Response
    {
        if ($this->isCsrfTokenValid('delete'.$subDomain->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($subDomain);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sub_domain_index');
    }
}
