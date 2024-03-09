<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Form\Hebergement1Type;
use App\Repository\HebergementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/hebergement/controller2')]
class HebergementController2Controller extends AbstractController
{
    #[Route('/app_hebergement_controller2_index', name: 'app_hebergement_controller2_index', methods: ['GET'])]
    public function index(HebergementRepository $hebergementRepository): Response
    {
         return $this->render('hebergement_controller2/index.html.twig', [
             'hebergements' => $hebergementRepository->findAll(),
         ]);
       
    }

<<<<<<< HEAD
    #[Route('/app_front_index', name: 'app_front_indexa', methods: ['GET'])]
=======
    #[Route('/app_front_index', name: 'app_front_index', methods: ['GET'])]
>>>>>>> 548d40ec88cd07c4e85f14ea41c71c280447db44
    public function index_front(HebergementRepository $hebergementRepository): Response
    {
         return $this->render('hebergement_controller2/howa.html.twig', [
             'hebergements' => $hebergementRepository->findAll(),
         ]);
       
    }

    #[Route('/new', name: 'app_hebergement_controller2_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $hebergement = new Hebergement();
        $form = $this->createForm(Hebergement1Type::class, $hebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($hebergement);
            $entityManager->flush();

            return $this->redirectToRoute('app_hebergement_controller2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hebergement_controller2/new.html.twig', [
            'hebergement' => $hebergement,
            'form' => $form,
        ]);
    }

    #[Route('/{Id}', name: 'app_hebergement_controller2_show', methods: ['GET'])]
    public function show(Hebergement $hebergement): Response
    {
        return $this->render('hebergement_controller2/show.html.twig', [
            'hebergement' => $hebergement,
        ]);
    }

<<<<<<< HEAD
    #[Route('/show/{Id}', name: 'app_showlisting', methods: ['GET'])]
    public function showlisting(Hebergement $hebergement): Response
    {
        return $this->render('hebergement_controller2/singlelisting.html.twig', [
            'hebergement' => $hebergement,
        ]);
    }

=======
>>>>>>> 548d40ec88cd07c4e85f14ea41c71c280447db44
    #[Route('/{Id}/edit', name: 'app_hebergement_controller2_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Hebergement $hebergement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Hebergement1Type::class, $hebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_hebergement_controller2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hebergement_controller2/edit.html.twig', [
            'hebergement' => $hebergement,
            'form' => $form,
        ]);
    }

    #[Route('/{Id}', name: 'app_hebergement_controller2_delete', methods: ['POST'])]
    public function delete(Request $request, Hebergement $hebergement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hebergement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($hebergement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_hebergement_controller2_index', [], Response::HTTP_SEE_OTHER);
    }
}
