<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use TCPDF;


#[Route('/evenement')]
class EvenementController extends AbstractController
{
    #[Route('/', name: 'app_evenement_index', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }
    #[Route('/app_index_front', name: 'app_index_front', methods: ['GET'])]
    public function index_front(EvenementRepository $evenementRepository): Response
    {
        return $this->render('evenement/eventfront.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id_event}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/{id_event}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id_event}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getIdEvent(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/evenements/pdf', name: 'app_evenements_pdf')]
    public function generatePdf(): Response
    {
        // Récupérer les données des locations
        $evenements = $this->getDoctrine()->getRepository(Evenement::class)->findAll();

        // Créer un nouvel objet TCPDF
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

        // Définir le titre du document
        $pdf->SetTitle('2Rism - Tableau Des Evenements');

        // Ajouter une page
        $pdf->AddPage();

        // Ajouter une image
        $image_file = 'C:/Users/user/2RISM/public/esprit.jpg';
        $pdf->Image($image_file, 10, 20, 50, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);

        // Ajouter un espace entre l'image et le titre
        $pdf->SetY(80);

        // Ajouter un titre coloré
        $pdf->SetFont('helvetica', 'B', 20);
        $pdf->SetTextColor(255, 0, 0); // Couleur rouge
        $pdf->Cell(0, 10, '2RISM', 0, true, 'C');

        // Ajouter un sous-titre
        $pdf->SetFont('helvetica', 'B', 16);
        $pdf->SetTextColor(0, 0, 0); // Couleur noire
        $pdf->Cell(0, 10, 'Tableau Des Evenements', 0, true, 'C');

        // Ajouter un espace entre le titre et le tableau
        $pdf->SetY(120);

        // Créer le tableau des locations avec des couleurs de ligne
        $html = '<table border="1" cellpadding="5" cellspacing="0">';
        $html .= '<tr bgcolor="#FFD700"><th>ID</th><th>nom event</th><th>type event</th><th>duree</th><th>date event</th></tr>';
        foreach ($evenements as $evenement) {
            $html .= '<tr>';
            $html .= '<td>' . $evenement->getIdEvent() . '</td>';
            $html .= '<td>' . $evenement->getNomEvent() . '</td>';
            $html .= '<td>' . $evenement->getTypeEvent() . '</td>';
            $html .= '<td>' . $evenement->getDureeEvent() . '</td>';
            $html .= '<td>' . $evenement->getDateEvent()->format('Y-m-d') . '</td>';
            $html .= '</tr>';
        }
        
        $html .= '</table>';

        // Écrire le contenu HTML dans le PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Envoyer le PDF en réponse
        return new Response($pdf->Output('tableau_evenements.pdf', 'I'), 200, [
            'Content-Type' => 'app_evenement/pdf',
            'Content-Disposition' => 'inline; filename="tableau_evenements.pdf"',
        ]);
    }
}
