<?php

namespace App\Controller;

use App\Entity\Evenement;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailerController extends AbstractController
{
    #[Route('/sendmail/{id_event}', name: 'mailing',methods: ['GET'])]
    public function sendEmail(MailerInterface $mailer,$id_event): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $evenement = $entityManager->getRepository(Evenement::class)->find($id_event);

        if (!$evenement) {
            throw $this->createNotFoundException('event not found for id '.$id_event);
        }

        

        $emailContent = "Bonjour ,\n\n";
        $emailContent .= "Nous vous informons des détails concernant l'événement '".$evenement->getNomEvent()."'.\n";
        $emailContent .= "Type d'événement: ".$evenement->getTypeEvent()."\n";
        $emailContent .= "Durée de l'événement: ".$evenement->getDureeEvent()."\n";
        $emailContent .= "Date de l'événement: ".$evenement->getDateEvent()->format('Y-m-d')."\n";
        $emailContent .= "Si vous avez des questions , n'hésitez pas à me contacter.\n";
        $emailContent .= "Cordialement,\n";
       
        
        

        // Créer l'objet Email
        $email = (new Email())
            ->from('kharrat.raed@esprit.tn')
            ->to('haythem.khamassi@esprit.tn')
            ->subject('Details evenement')
            ->text($emailContent);

        // Envoyer l'e-mail
        $mailer->send($email);

        // Retourner une réponse
        return new Response('Email sent successfully');
    }
}