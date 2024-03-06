<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types; // Add this line if it's missing

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_event = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex(
        pattern: '/^[A-Za-z]+$/',
        message: 'Le nom de l\'événement doit contenir uniquement des caractères alphabétiques.'
    )]
    #[Assert\NotBlank(message: 'Le nom de l\'événement ne peut pas être vide.')]

    #[Assert\Length(
        max: 10,
        maxMessage: 'Le nom de l\'événement ne doit pas dépasser {{ limit }} caractères.'
    )]
    private ?string $nom_event = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'L ne peut pas être vide.')]

    #[Assert\Length(
        max: 10,
    )]
    private ?string $type_event = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: ' ne peut pas être vide.')]

    private ?string $duree_event = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: ' ne peut pas être vide.')]

    private ?\DateTimeInterface $date_event = null;

    public function getIdEvent(): ?int
    {
        return $this->id_event;
    }

    public function getTypeEvent(): ?string
    {
        return $this->type_event;
    }

    public function setTypeEvent(string $type_event): static
    {
        $this->type_event = $type_event;

        return $this;
    }

    public function getDureeEvent(): ?string
    {
        return $this->duree_event;
    }

    public function setDureeEvent(string $duree_event): static
    {
        $this->duree_event = $duree_event;

        return $this;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->date_event;
    }

    public function setDateEvent(\DateTimeInterface $date_event): static
    {
        $this->date_event = $date_event;

        return $this;
    }

    public function getNomEvent(): ?string
    {
        return $this->nom_event;
    }

    public function setNomEvent(string $nom_event): static
    {
        $this->nom_event = $nom_event;

        return $this;
    }
}