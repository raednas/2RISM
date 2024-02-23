<?php

namespace App\Controller;
use App\Repository\PostRepository;
use App\Entity\Post;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commentaire')]
class CommentaireController extends AbstractController
{
    #[Route('/', name: 'app_commentaire_index', methods: ['GET'])]
    public function index(CommentaireRepository $commentaireRepository): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'commentaires' => $commentaireRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_commentaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, PostRepository $postRepository): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérez l'ID du post à partir de la requête
            $postId = $form->get('post_id')->getData();
    
            // Recherchez le post dans la base de données
            $post = $postRepository->find($postId);
    
            if ($post) {
                // Liez le post au commentaire
                $commentaire->setPost($post);
    
                // Enregistrez le commentaire dans la base de données
                $entityManager->persist($commentaire);
                $entityManager->flush();
    
                return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
            } else {
                // Gérez le cas où le post n'existe pas
                // ...
            }
        }
    
        return $this->render('commentaire/new.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(), // Assurez-vous que le formulaire est correctement passé à la vue
        ]);
    }
    

    

    #[Route('/{id}', name: 'app_commentaire_show', methods: ['GET'])]
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commentaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commentaire/edit.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commentaire_delete', methods: ['POST'])]
    public function delete(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentaire->getIdcommentaire(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/commenter/{id}', name: 'commenter_new', methods: ['POST'])]
public function commenterNew(Request $request, Post $post): Response
{
    // Créer une nouvelle instance de Commentaire liée au post
    $commentaire = new Commentaire();
    $commentaire->setPost($post);

    // Créer le formulaire
    $form = $this->createForm(CommentaireType::class, $commentaire);

    // Gérer la soumission du formulaire
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Enregistrer le commentaire dans la base de données
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($commentaire);
        $entityManager->flush();

        // Rediriger ou effectuer toute autre action nécessaire après la création du commentaire
        return $this->redirectToRoute('app_blog_index');
    }

    // Si le formulaire n'est pas valide, afficher la page avec le formulaire et les messages d'erreur
    return $this->render('post/show_front.html.twig', [
        'form' => $form->createView(),
        'post' => $post,
    ]);
}
}