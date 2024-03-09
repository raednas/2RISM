<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

class BobotController extends AbstractController
{
    /**
     * @Route("/message", name="message")
     */
    public function message(Request $request): Response
    {
        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

        // BotMan configuration
        $config = [];

        // Create BotMan instance
        $botman = BotManFactory::create($config);

        // Define bot responses
        $this->defineBotResponses($botman);

        // Start listening
        $botman->listen();

        return new Response();
    }

    /**
     * Define bot responses based on keywords
     */
    private function defineBotResponses(BotMan $botman): void
    {
        // Greetings responses
        $botman->hears('(hello|hi|salut|bonjour)', function (BotMan $bot) {
            $bot->reply('Hello! I am the bot of 2RISM. How can I assist you today?');
        });

        // Simple questions responses
        $botman->hears('(السلام)', function (BotMan $bot) {
            $bot->reply('مرحبا بك  ?');
        });
        // Simple questions responses
        $botman->hears('(how are you)', function (BotMan $bot) {
            $bot->reply('I am a robot, so I am always fine! How can I help you?');
        });
        // Simple questions responses
        $botman->hears('(je veux reserver un pack)', function (BotMan $bot) {
            $bot->reply('contact 2rism , je suis a vos service');
        });

        // Question: What types of events do you organize?
        $botman->hears('(what types of events types of events)', function (BotMan $bot) {
            $bot->reply("We organize various types of events such as conferences, seminars, exhibitions, and corporate events.");
        });

        // Question: Can you give me details about your upcoming events?
        $botman->hears('(details about upcoming events upcoming events)', function (BotMan $bot) {
            $bot->reply("Sure! You can find all the details about our upcoming events on our website. Check the 'Events' section for more information.");
        });

        // Question: How can I register for one of your events?
        $botman->hears('(how to register for an event register for an event registration)', function (BotMan $bot) {
            $bot->reply("To register for one of our events, visit our website and find the event page that interests you. You will find a registration form there.");
        });

        // Question: Do you have any upcoming events in my area?
        $botman->hears('(events in my area upcoming events near me)', function (BotMan $bot) {
            $bot->reply("We regularly organize events in different regions. To find out about upcoming events near you, visit our website or subscribe to our newsletter.");
        });

        // Question: Can you tell me about custom event organization?
        $botman->hears('(custom event organization custom events)', function (BotMan $bot) {
            $bot->reply("Yes, we also offer custom event organization services to meet the specific needs of our clients. Contact us to discuss your requirements.");
        });

        // Question: What types of accommodation do you offer?
        $botman->hears('(what types of accommodation accommodation)', function (BotMan $bot) {
            $bot->reply("We offer different types of accommodation, including hotels, apartments, vacation homes, and luxury accommodations.");
        });

        // Add more questions and responses here...

        // Default response
        $botman->fallback(function(BotMan $bot) {
            $bot->reply("Sorry, I didn't understand your request. Please ask another question or visit our website for more information.");
        });
    }

    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        return $this->render('chat/homepage.html.twig');
    }

    /**
     * @Route("/chatframe", name="chatframe")
     */
    public function chatframe(): Response
    {
        return $this->render('chat/chatframe.html.twig');
    }
}
