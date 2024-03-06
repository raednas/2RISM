<?php

namespace App\Controller;

use App\Entity\ReservationPack;
use App\Form\ReservationPackType;
use App\Repository\ReservationPackRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reservation/pack')]
class ReservationPackController extends AbstractController
{
    #[Route('/', name: 'app_reservation_pack_index', methods: ['GET'])]
    public function index(ReservationPackRepository $reservationPackRepository): Response
    {
        return $this->render('reservation_pack/index.html.twig', [
            'reservation_packs' => $reservationPackRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reservation_pack_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservationPack = new ReservationPack();
        $form = $this->createForm(ReservationPackType::class, $reservationPack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationPack);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_pack_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_pack/new.html.twig', [
            'reservation_pack' => $reservationPack,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_pack_show', methods: ['GET'])]
    public function show(ReservationPack $reservationPack): Response
    {
        return $this->render('reservation_pack/show.html.twig', [
            'reservation_pack' => $reservationPack,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_pack_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationPack $reservationPack, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationPackType::class, $reservationPack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_pack_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_pack/edit.html.twig', [
            'reservation_pack' => $reservationPack,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_pack_delete', methods: ['POST'])]
    public function delete(Request $request, ReservationPack $reservationPack, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationPack->getId_ReservationPack(), $request->request->get('_token'))) {
            $entityManager->remove($reservationPack);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_pack_index', [], Response::HTTP_SEE_OTHER);
    }
}
