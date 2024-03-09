<?php
namespace App\Entity;

use App\Repository\ChatbotRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChatbotRepository::class)]
class Chatbot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $queries = null;

    #[ORM\Column(length: 255)]
    private ?string $replies = null;

    #[ORM\Column(length: 255)] // Ajout de la nouvelle propriété message
    private ?string $message = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQueries(): ?string
    {
        return $this->queries;
    }

    public function setQueries(string $queries): static
    {
        $this->queries = $queries;

        return $this;
    }

    public function getReplies(): ?string
    {
        return $this->replies;
    }

    public function setReplies(string $replies): static
    {
        $this->replies = $replies;

        return $this;
    }

    // Ajouter les getters et setters pour la propriété message
    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }
}
