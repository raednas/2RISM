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
    //////////////////////////////////ajouter  ajax

  
    #[Route('/new', name: 'app_pack_personnaliser_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, PackRepository $packRepository, ProgrammeRepository $programmeRepository): JsonResponse
    {
        $packId = $request->request->get('packId');
        $programmeId = $request->request->get('programmeId');

        // Vérifiez si un ID de pack est disponible dans la requête
        if ($packId) {
            // Récupérez le pack correspondant à partir de l'ID envoyé par la requête AJAX
            $pack = $packRepository->find($packId);

            if (!$pack) {
                return new JsonResponse(['error' => 'Pack not found'], Response::HTTP_NOT_FOUND);
            }

            // Créez une nouvelle entité PackPersonnaliser avec les données pertinentes
            $packPersonnaliser = new PackPersonnaliser();
            $packPersonnaliser->setPack($pack);
        }

        // Vérifiez si un ID de programme est disponible dans la requête
        if ($programmeId) {
            // Récupérez le programme correspondant à partir de l'ID envoyé par la requête AJAX
            $programme = $programmeRepository->find($programmeId);

            if (!$programme) {
                return new JsonResponse(['error' => 'Programme not found'], Response::HTTP_NOT_FOUND);
            }

            // Si un pack a déjà été créé, ajoutez le programme à ce packPersonnaliser
            if (isset($packPersonnaliser)) {
                $packPersonnaliser->setProgramme($programme);
            } else {
                // Si aucun pack n'a été créé, créez une nouvelle entité PackPersonnaliser avec le programme
                $packPersonnaliser = new PackPersonnaliser();
                $packPersonnaliser->setProgramme($programme);
            }
        }

        // Persistez et flush la nouvelle entité
        $entityManager->persist($packPersonnaliser);
        $entityManager->flush();

        // Ajouter un message flash de succès
        $this->addFlash('success', 'L\'élément a été ajouté avec succès.');

        // Retournez une réponse appropriée
        return new JsonResponse(['success' => true, 'packPersonnaliserId' => $packPersonnaliser->getIdPackPersonnaliser()]);
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
        // Vérification du jeton CSRF
        if ($this->isCsrfTokenValid('delete'.$packPersonnaliser->getIdPackPersonnaliser(), $request->request->get('_token'))) {
            // Suppression de l'entité
            $entityManager->remove($packPersonnaliser);
            $entityManager->flush();
        }
    
        // Redirection après suppression
        return $this->redirectToRoute('app_pack_personnaliser_index', [], Response::HTTP_SEE_OTHER);
    }

#[Route('/add-items', name: 'add_items', methods: ['POST'])]
public function addSelectedItems(Request $request, PackPersonnaliserRepository $packPersonnaliserRepository): Response
{
    // Assurez-vous de récupérer les données POST correctement
    $data = json_decode($request->getContent(), true);

    // Vérifiez si les données contiennent les clés 'selectedPacks' et 'selectedPrograms'
    if (isset($data['selectedPacks']) && isset($data['selectedPrograms'])) {
        // Récupérez les identifiants des packs et des programmes sélectionnés
        $selectedPacks = $data['selectedPacks'];
        $selectedPrograms = $data['selectedPrograms'];

        // Appelez la fonction du repository pour enregistrer les sélections en base de données
        $packPersonnaliser = $packPersonnaliserRepository->saveSelectedItems($selectedPacks, $selectedPrograms);

        // Retournez une réponse appropriée avec l'ID de l'entité créée
        return new JsonResponse(['id' => $packPersonnaliser->getIdPackPersonnaliser()]);
    } else {
        // Les données POST sont incorrectes ou manquantes, retournez une réponse d'erreur
        return new JsonResponse(['error' => 'Les données POST sont incorrectes ou manquantes'], Response::HTTP_BAD_REQUEST);
    }
}
}
