<?php

namespace App\Controller;

use App\Entity\PackPersonnaliser;
use App\Form\PackPersonnaliserType;
use App\Repository\PackPersonnaliserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PackRepository;
use App\Repository\ProgrammeRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/packpersonnaliser')]
class PackPersonnaliserController extends AbstractController
{
    #[Route('/a', name: 'app_pack_personnaliser_index', methods: ['GET'])]
    public function index(PackPersonnaliserRepository $packPersonnaliserRepository): Response
    {
        return $this->render('pack_personnaliser/index.html.twig', [
            'pack_personnalisers' => $packPersonnaliserRepository->findAll(),
        ]);
    }
    
    //////front

    #[Route('/b', name: 'app_pack_personnaliserfront_index', methods: ['GET'])]
    public function indexf(Request $request,PackRepository $packRepository,ProgrammeRepository $programmeRepository): Response
    {
        
    
        return $this->render('pack_personnaliser/index_front.html.twig', [
            'programmes' => $programmeRepository->findAll(),
            'packs' => $packRepository->findAll(),
        ]);
    }
    ////////////////////////


    #[Route('/search', name: 'app_pack_personnaliser_search', methods: ['GET', 'POST'])]
    public function search(Request $request, ProgrammeRepository $programmeRepository, PackRepository $packRepository): JsonResponse
    {
        $searchQuery = $request->query->get('query');

        if (!empty($searchQuery)) {
            $programmes = $programmeRepository->findByNom($searchQuery);
            $packs = $packRepository->findByNomPack($searchQuery);

            // Retourner les résultats au format JSON
            return $this->json(['programmes' => $programmes, 'packs' => $packs]);
        }

        // Aucune requête de recherche spécifiée
        return $this->json([]);
    }
    //////////////////////////////////

    #[Route('/new', name: 'app_pack_personnaliser_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $packPersonnaliser = new PackPersonnaliser();
        $form = $this->createForm(PackPersonnaliserType::class, $packPersonnaliser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($packPersonnaliser);
            $entityManager->flush();

            return $this->redirectToRoute('app_pack_personnaliser_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pack_personnaliser/new.html.twig', [
            'pack_personnaliser' => $packPersonnaliser,
            'form' => $form,
        ]);
    }

    #[Route('/{idPackPersonnaliser}', name: 'app_pack_personnaliser_show', methods: ['GET'])]
    public function show(PackPersonnaliser $packPersonnaliser): Response
    {
        return $this->render('pack_personnaliser/show.html.twig', [
            'pack_personnaliser' => $packPersonnaliser,
        ]);
    }

    #[Route('/{idPackPersonnaliser}/edit', name: 'app_pack_personnaliser_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PackPersonnaliser $packPersonnaliser, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PackPersonnaliserType::class, $packPersonnaliser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_pack_personnaliser_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pack_personnaliser/edit.html.twig', [
            'pack_personnaliser' => $packPersonnaliser,
            'form' => $form,
        ]);
    }

    #[Route('/{idPackPersonnaliser}', name: 'app_pack_personnaliser_delete', methods: ['POST', 'DELETE'])]
public function delete(Request $request, PackPersonnaliser $packPersonnaliser, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$packPersonnaliser->getIdPackPersonnaliser(), $request->request->get('_token'))) {
        $entityManager->remove($packPersonnaliser);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_pack_personnaliser_index', [], Response::HTTP_SEE_OTHER);
}

public function reserve(Request $request, EntityManagerInterface $entityManager): Response
{
    // Créer une nouvelle instance de l'entité PackPersonnaliser
    $packPersonnaliser = new PackPersonnaliser();

    // Créer le formulaire à partir de l'entité PackPersonnaliser
    $form = $this->createForm(PackPersonnaliserType::class, $packPersonnaliser);

    // Gérer la soumission du formulaire
    $form->handleRequest($request);

    // Vérifier si le formulaire a été soumis et est valide
    if ($form->isSubmitted() && $form->isValid()) {
        // Récupérer les données du formulaire
        $data = $form->getData();

        // Récupérer le pack et le programme choisis par le client
        $pack = $data->getPack();
        $programme = $data->getProgramme();

        // Vérifier si les choix ont été faits
        if ($pack && $programme) {
            // Assigner les choix au pack personnalisé
            $packPersonnaliser->setPack($pack);
            $packPersonnaliser->setProgramme($programme);

            // Enregistrer le pack personnalisé dans la base de données
            $entityManager->persist($packPersonnaliser);
            $entityManager->flush();

            // Rediriger l'utilisateur vers une page de confirmation ou effectuer d'autres actions
            return $this->redirectToRoute('confirmation_page');
        } else {
            return $this->redirectToRoute('app_pack_personnaliserfront_index');
        }
    }

    // Afficher le formulaire dans le template
    return $this->render('reservation.html.twig', [
        'form' => $form->createView(),
    ]);
}

}
