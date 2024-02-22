<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Programme;
use App\Form\ProgrammeType;
use App\Repository\ProgrammeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;


#[Route('/programme')]
class ProgrammeController extends AbstractController
{
    #[Route('/', name: 'app_programme_index', methods: ['GET'])]
    public function index(ProgrammeRepository $programmeRepository): Response
    {
        return $this->render('programme/index.html.twig', [
            'programmes' => $programmeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_programme_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, ParameterBagInterface $parameterBag): Response
{
   // Récupérer toutes les catégories de programme disponibles depuis la base de données
   $categories = $entityManager->getRepository(Categorie::class)->findAll();
   
   // Créer le formulaire
   $programme = new Programme();
   $form = $this->createForm(ProgrammeType::class, $programme, ['categories' => $categories]);
    
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {

        $Categorieselect = $form->get('categorie')->getData();
        $this->updatecategorie($programme,$Categorieselect);

        // Obtenez le répertoire d'images à partir du conteneur de paramètres
        $imagesDirectory = $parameterBag->get('kernel.project_dir') . '/public/uploads/images';

        // Traitement du téléchargement de l'image
        $imageFile = $form->get('imageFile')->getData();

        if ($imageFile) {
            try {
                $imageName = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move($imagesDirectory, $imageName);
                $programme->setImage($imageName);
            } catch (FileException $e) {
                // Gérer l'erreur de téléchargement de fichier
                $this->addFlash('error', 'An error occurred while uploading the image.');
                return $this->redirectToRoute('app_programme_new');
            }
        }

        // Persist et flush de l'entité dans la base de données
        $entityManager->persist($programme);
        $entityManager->flush();
    
        return $this->redirectToRoute('app_programme_index');
    }
    
    return $this->render('programme/new.html.twig', [
        'programme' => $programme,
        'form' => $form->createView(),
    ]);
}
private function updatecategorie(Programme $programme, Categorie $Categorie)
    {
       
        $programme->setCategorie($Categorie);
    
        
    }


    #[Route('/{id}', name: 'app_programme_show', methods: ['GET'])]
    public function show(Programme $programme): Response
    {
        return $this->render('programme/show.html.twig', [
            'programme' => $programme,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_programme_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Programme $programme, EntityManagerInterface $entityManager): Response
{
    // Récupérer toutes les catégories de programme disponibles depuis la base de données
    $categories = $entityManager->getRepository(Categorie::class)->findAll();
   
    // Créer le formulaire en utilisant l'objet Programme existant
    $form = $this->createForm(ProgrammeType::class, $programme, ['categories' => $categories]);
    
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        $Categorieselect = $form->get('categorie')->getData();
    
        $imageFile = $form->get('imageFile')->getData(); // Assurez-vous que le champ est correctement nommé

        if ($imageFile) {
            // Déplacer le fichier téléchargé vers le répertoire souhaité
            $destination = $this->getParameter('kernel.project_dir').'/public/uploads/images';
            $newFilename = uniqid().'.'.$imageFile->guessExtension();
            try {
                $imageFile->move($destination, $newFilename);
                $programme->setImage($newFilename); // Définir le nom du fichier dans l'entité
            } catch (FileException $e) {
                // Gérer l'exception si le déplacement du fichier a échoué
            }
        }
        
        // Enregistrer les modifications dans la base de données
        $entityManager->flush();
    
        return $this->redirectToRoute('app_programme_index', [], Response::HTTP_SEE_OTHER);
    }
    
    // Rendre le formulaire dans le template
    return $this->render('programme/edit.html.twig', [
        'programme' => $programme,
        'form' => $form->createView(),
    ]);
}


    #[Route('/{id}', name: 'app_programme_delete', methods: ['POST'])]
    public function delete(Request $request, Programme $programme, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$programme->getId_prog(), $request->request->get('_token'))) {
            $entityManager->remove($programme);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_programme_index', [], Response::HTTP_SEE_OTHER);
    }
}
