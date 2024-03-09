<?php

namespace App\Controller;

use App\Entity\Locationvoitures;
use App\Form\LocationvoituresType;
use App\Repository\LocationvoituresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/locationvoitures')]
class LocationvoituresController extends AbstractController
{
    #[Route('/', name: 'app_locationvoitures_index', methods: ['GET'])]
    public function index(LocationvoituresRepository $locationvoituresRepository): Response
    {
        return $this->render('locationvoitures/index.html.twig', [
            'locationvoitures' => $locationvoituresRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_locationvoitures_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $locationvoiture = new Locationvoitures();
        $form = $this->createForm(LocationvoituresType::class, $locationvoiture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($locationvoiture);
            $entityManager->flush();

            return $this->redirectToRoute('app_locationvoitures_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('locationvoitures/new.html.twig', [
            'locationvoiture' => $locationvoiture,
            'form' => $form,
        ]);
    }

    #[Route('/{id_agence}', name: 'app_locationvoitures_show', methods: ['GET'])]
    public function show(Locationvoitures $locationvoiture): Response
    {
        return $this->render('locationvoitures/show.html.twig', [
            'locationvoiture' => $locationvoiture,
        ]);
    }

    #[Route('/{id_agence}/edit', name: 'app_locationvoitures_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Locationvoitures $locationvoiture, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LocationvoituresType::class, $locationvoiture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_locationvoitures_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('locationvoitures/edit.html.twig', [
            'locationvoiture' => $locationvoiture,
            'form' => $form,
        ]);
    }

    #[Route('/{id_agence}', name: 'app_locationvoitures_delete', methods: ['POST'])]
    public function delete(Request $request, Locationvoitures $locationvoiture, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$locationvoiture->getId_agence(), $request->request->get('_token'))) {
            $entityManager->remove($locationvoiture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_locationvoitures_index', [], Response::HTTP_SEE_OTHER);
    }
}
