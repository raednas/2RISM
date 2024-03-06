<?php

namespace App\Controller;

use App\Repository\ChatbotRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Service\WitAiService;
use App\Form\ChatbotMessageType;

class ChatbotController extends AbstractController
{
    /**
     * @Route("/chatbot", name="chatbot")
     */
    public function index(Request $request, ChatbotRepository $chatbotRepository, WitAiService $witAiService): Response
    {
        // Créer le formulaire
        $form = $this->createForm(ChatbotMessageType::class);
        $form->handleRequest($request);

        // Initialiser la variable de conversation
        $conversation = [];

        // Traiter le formulaire
        if ($form->isSubmitted() && $form->isValid()) {
            $message = $form->getData()->getMessage();

            // Appeler le service Wit.ai pour obtenir la réponse du chatbot
            $response = $witAiService->sendMessage($message);

            // Ajouter le message de l'utilisateur à la conversation
            $conversation[] = ['content' => $message, 'source' => 'user'];

            // Ajouter la réponse du chatbot à la conversation
            $conversation[] = ['content' => $response['text'] ?? "Désolé, je n'ai pas compris votre message.", 'source' => 'chatbot'];
        }

        // Afficher le formulaire avec ou sans réponse
        return $this->render('message.html.twig', [
            'form' => $form->createView(),
            'conversation' => $conversation,
        ]);
    }
}
