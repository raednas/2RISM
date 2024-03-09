<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Form\VehiculeType;
use App\Repository\VehiculeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

#[Route('/vehicule')]
class VehiculeController extends AbstractController
{
    #[Route('/b', name: 'app_vehicule_index', methods: ['GET'])]
    public function index(VehiculeRepository $vehiculeRepository): Response
    {
        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehiculeRepository->findAll(),
        ]);  
    }

    #[Route('/f', name: 'app_front_index', methods: ['GET'])]
    public function frontIndex(VehiculeRepository $vehiculeRepository): Response
    {
        return $this->render('vehicule/index_front.html.twig', [
            'vehicules' => $vehiculeRepository->findAll(),
        ]);  
    }

    #[Route('/excel', name: 'excel')]
    public function exportAllProducts(EntityManagerInterface $entityManager): Response
    {
        // Fetch all products from the database
        $vehicules = $entityManager
            ->getRepository(Vehicule::class)
            ->findAll();

        // Create a new Spreadsheet object and populate it with the data
        $spreadsheet = new Spreadsheet();
        $worksheet = $spreadsheet->getActiveSheet();
        $worksheet->setCellValue('A1', 'immatriculation');
        $worksheet->setCellValue('B1', 'modele');
        $worksheet->setCellValue('C1', 'prixdelocation');

        // Row counter for data insertion
        $row = 2;

        // Loop through each product and fill the spreadsheet
        foreach ($vehicules as $vehicule) {
            $worksheet->setCellValue('A' . $row, $vehicule->getImmatriculation());
            $worksheet->setCellValue('B' . $row, $vehicule->getModele());
            $worksheet->setCellValue('C' . $row, $vehicule->getPrixdelocation());

            // Increment row counter
            $row++;
        }

        // Create a new Xlsx writer and write the Spreadsheet object to it
        $writer = new Xlsx($spreadsheet);
        $excelFilename = 'vehicules_all.xlsx';
        $writer->save($excelFilename);

        // Send the Excel file as a download to the user
        $response = new BinaryFileResponse($excelFilename);
        $response->setContentDisposition(\Symfony\Component\HttpFoundation\ResponseHeaderBag::DISPOSITION_ATTACHMENT, $excelFilename);

        return $response;
    }


    




    #[Route('/new', name: 'app_vehicule_new', methods: ['GET', 'POST'])]
public function new(Request $request , SluggerInterface $slugger): Response
{
    $vehicule = new Vehicule();
    $form = $this->createForm(VehiculeType::class, $vehicule);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        /** @var UploadedFile $imageFile */
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            // Move the file to the directory where your images are stored
            try {
                $imageFile->move(
                    $this->getParameter('img_directory'), // specify the directory where images should be stored
                    $newFilename
                );
            } catch (FileException $e) {
                // Handle the exception if something happens during the file upload
            }

            // Update the 'image' property to store the file name instead of its contents
            $vehicule->setImage($newFilename);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($vehicule);
        $entityManager->flush();

        return $this->redirectToRoute('app_vehicule_index');
    }

    return $this->render('vehicule/new.html.twig', [
        'form' => $form->createView(),
    ]);
}
    

    #[Route('/{id}', name: 'app_vehicule_show', methods: ['GET'])]
    public function show(Vehicule $vehicule): Response
    {
        return $this->render('vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }



    

    #[Route('/{id}/edit', name: 'app_vehicule_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vehicule $vehicule, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

            // Move the file to the directory where your images are stored
            try {
                $imageFile->move(
                    $this->getParameter('img_directory'), // specify the directory where images should be stored
                    $newFilename
                );
            } catch (FileException $e) {
                // Handle the exception if something happens during the file upload
            }

            // Update the 'image' property to store the file name instead of its contents
            $vehicule->setImage($newFilename);
        }
            $entityManager->flush();

            return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('vehicule/edit.html.twig', [
            'vehicule' => $vehicule,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_vehicule_delete', methods: ['POST'])]
    public function delete(Request $request, Vehicule $vehicule, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vehicule->getId_vehicule(), $request->request->get('_token'))) {
            $entityManager->remove($vehicule);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_vehicule_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/validate-immatriculation', name: 'app_validate_immatriculation', methods: ['POST'])]
public function validateImmatriculation(Request $request): JsonResponse
{
    $immatriculation = $request->request->get('immatriculation');
    $isValid = preg_match('/^\d{3}TU\d{4}$/', $immatriculation) === 1;

    return new JsonResponse(['isValid' => $isValid]);

}
    
    
}

