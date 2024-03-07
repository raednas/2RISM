<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;




class RegistrationController extends AbstractController
{

    private $passwordEncoder;

    
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    
    

    #[Route('/registration', name: 'registration')]
    public function index(ManagerRegistry $doctrine,Request $request,AuthenticationUtils $authenticationUtils): Response
    {

        $error = $authenticationUtils->getLastAuthenticationError();

        $user = new User();

        $form = $this->createForm( UserType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $user->getPassword($this->passwordEncoder->encodePassword($user, $user->getPassword()));
            $user->setRoles(['ROLE_USER']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('app_login');
        }
        return $this->render('registration/registre.html.twig',['r'=>$form->createView(),'error' => $error]);
    }


    #[Route('/userback', name: 'backuser')]
    public function backAdmin(ManagerRegistry $doctrine): Response
    {
        $Users = $doctrine->getManager()->getRepository(User::class)->findAll();

        return $this->render('admin/back.html.twig', [ 'r' => $Users ]);

        
    }



    #[Route('/suppuser/{id}', name: 'supp_user')]
public function suppuser(ManagerRegistry $doctrine, $id): RedirectResponse
{
    $entityManager = $doctrine->getManager();
    $user = $entityManager->getRepository(User::class)->find($id);

    if (!$user) {
        throw $this->createNotFoundException('Utilisateur not found');
    }

    $entityManager->remove($user);
    $entityManager->flush();

    return $this->redirectToRoute('backuser');
}

#[Route('/modifuser/{id}', name: 'modifuser')]
    public function modifuser(ManagerRegistry $doctrine,Request $request,$id): Response
    {
        
        $entityManager = $doctrine->getManager();
        $User = $entityManager->getRepository(User::class)->find($id);

        $form = $this->createForm( UserType::class,$User);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $doctrine->getManager();
            
            $em->flush();
            return $this->redirectToRoute('backuser');
        }
        return $this->render('utilisateur/modifuser.html.twig',['r'=>$form->createView()]);
    }



    #[Route('/confirm/{id}', name: 'confirm')]
    public function confirm(ManagerRegistry $doctrine,Request $request,$id): Response
    {
        $entityManager = $doctrine->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
    
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur not found');
        }
        $roles = ['USER_ADMIN']; // Set the desired role(s)
        $user->setRoles($roles);

        // Update the changes to the database
        $entityManager->flush();
       
    
        return $this->redirectToRoute('backuser');
    }


}