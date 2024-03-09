<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_vehicule = null;

    #[ORM\Column(length: 20)]
    private ?string $immatriculation = null;

    #[ORM\Column(length: 20)]
    private ?string $modele = null;

    #[ORM\Column]
    private ?int $nbr_places = null;

    #[ORM\Column(length: 20)]
    private ?string $couleur = null;

    #[ORM\Column]
    private ?float $prixdelocation = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $image = null;

    public function getId_vehicule(): ?int
    {
        return $this->id_vehicule;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation): static
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getNbrPlaces(): ?int
    {
        return $this->nbr_places;
    }

    public function setNbrPlaces(int $nbr_places): static
    {
        $this->nbr_places = $nbr_places;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): static
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getPrixdelocation(): ?float
    {
        return $this->prixdelocation;
    }

    public function setPrixdelocation(float $prixdelocation): static
    {
        $this->prixdelocation = $prixdelocation;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }
    #[ORM\ManyToOne(targetEntity: Locationvoitures::class)]
    #[ORM\JoinColumn(name: 'id_agence', referencedColumnName: 'id_agence')]
    private ?Locationvoitures $locationvoitures = null;

    public function getLocationvoitures(): ?Locationvoitures
    {
        return $this->locationvoitures;
    }

    public function setLocationvoitures(?Locationvoitures $locationvoitures): static
    {
        $this->locationvoitures = $locationvoitures;

        return $this;
    }

    public function getIdVehicule(): ?int
    {
        return $this->id_vehicule;
    }

    public function __toString(): string
{
    return $this->modele ?? '';
}
}
