<?php

namespace App\Controller;
use Symfony\Component\Form\FormFactoryInterface;
use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
#[Route('/post')]
class PostController extends AbstractController
{
    #[Route('/back', name: 'app_post_index', methods: ['GET'])]
    public function index(PostRepository $postRepository): Response
    {
        return $this->render('post/index.html.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }

    #[Route('/front', name: 'app_blog_index', methods: ['GET'])]
    public function indexx(PostRepository $postRepository): Response
    {
        return $this->render('post/index_front.html.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_post_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, ParameterBagInterface $parameterBag): Response
{
    $post = new Post();
    $form = $this->createForm(PostType::class, $post);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Obtenez le répertoire d'images à partir du conteneur de paramètres
        $imagesDirectory = $parameterBag->get('kernel.project_dir') . '/public/uploads/images';

        // Traitement de l'image téléchargée
        $imageFile = $form->get('image_p')->getData();

        if ($imageFile) {
            $imageName = uniqid().'.'.$imageFile->guessExtension();
            $imageFile->move($imagesDirectory, $imageName);

            // Assignation de l'emplacement de l'image à l'entité
            $post->setImage_P($imageName);
        }

        $entityManager->persist($post);
        $entityManager->flush();

        return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('post/new.html.twig', [
        'post' => $post,
        'form' => $form,
    ]);
}


    #[Route('/back/{id}', name: 'app_post_show', methods: ['GET'])]
    public function show(Post $post): Response
    {
        return $this->render('post/show.html.twig', [
            'post' => $post,
        ]);
    }

    #[Route('/front/{id}', name: 'app_front_show', methods: ['GET'])]
    public function showFront(Post $post, Request $request, CommentaireRepository $commentaireRepository, FormFactoryInterface $formFactory, EntityManagerInterface $entityManager): Response
{
    $commentaire = new Commentaire();
    $commentaireForm = $this->createForm(CommentaireType::class, $commentaire);
    $commentaireForm->handleRequest($request);

    if ($commentaireForm->isSubmitted() && $commentaireForm->isValid()) {
        // Traitement du formulaire de commentaire et enregistrement en base de données
        $commentaire->setPost($post); // Assurez-vous de lier le commentaire au post
        $entityManager->persist($commentaire);
        $entityManager->flush();
    }

    return $this->render('post/show_front.html.twig', [
        'post' => $post,
        'form' => $commentaireForm->createView(),
        // Ajoutez d'autres données nécessaires à votre template
    ]);
}

    




    #[Route('/{id}/edit', name: 'app_post_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imageFile = $form->get('image_p')->getData();
            

        // Traitement de l'image téléchargée
        $imageFile = $form->get('image_p')->getData();

        if ($imageFile) {
            $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/images';
            $imageName = uniqid().'.'.$imageFile->guessExtension();
            $newFilename = uniqid().'.'.$imageFile->guessExtension();


           try {
                $imageFile->move($destination, $newFilename);
                $post->setImage_p($newFilename); // Définir le nom du fichier dans l'entité
            } catch (FileException $e) {
                // Gérer l'exception si le déplacement du fichier a échoué
            }
        }
        $entityManager->persist($post);
        $entityManager->flush();

        return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('post/edit.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_post_delete', methods: ['POST'])]
    public function delete(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$post->getIdpost(), $request->request->get('_token'))) {
            $entityManager->remove($post);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_post_index', [], Response::HTTP_SEE_OTHER);
    }
}
