<?php

namespace App\Entity;

use App\Repository\HebergementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: HebergementRepository::class)]
class Hebergement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $Id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $type_hebergement = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $emplacement = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Range(min: 1, max: 5)]
    private ?int $nbr_etoile = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 25)]
    private ?string $description = null;

<<<<<<< HEAD
    #[ORM\Column(length: 255)]
    private ?string $name = null;

   

    #[ORM\Column]
    private ?float $prix = null;

=======
>>>>>>> 548d40ec88cd07c4e85f14ea41c71c280447db44
    public function getId(): ?int
    {
        return $this->Id;
    }

    public function getTypeHebergement(): ?string
    {
        return $this->type_hebergement;
    }

    public function setTypeHebergement(string $type_hebergement): static
    {
        $this->type_hebergement = $type_hebergement;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): static
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getNbrEtoile(): ?int
    {
        return $this->nbr_etoile;
    }

    public function setNbrEtoile(int $nbr_etoile): static
    {
        $this->nbr_etoile = $nbr_etoile;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
<<<<<<< HEAD

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

   

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }
=======
>>>>>>> 548d40ec88cd07c4e85f14ea41c71c280447db44
}
