<?php

namespace App\Entity;

use App\Repository\LocationvoituresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocationvoituresRepository::class)]
class Locationvoitures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_agence = null;

    #[ORM\Column(length: 20)]
    private ?string $nom_agence = null;

    #[ORM\Column(length: 30)]
    private ?string $adresse_agence = null;

    #[ORM\Column]
    private ?int $nbrvoitures_dispo = null;

    public function getid_agence(): ?int
    {
        return $this->id_agence;
    }

    public function getnomagence(): ?string
    {
        return $this->nom_agence;
    }

    public function setNomAgence(string $nom_agence): static
    {
        $this->nom_agence = $nom_agence;

        return $this;
    }

    public function getadresseagence(): ?string
    {
        return $this->adresse_agence;
    }

    public function setAdresseAgence(string $adresse_agence): static
    {
        $this->adresse_agence = $adresse_agence;

        return $this;
    }

    public function getnbrvoituresdispo(): ?int
    {
        return $this->nbrvoitures_dispo;
    }

    public function setNbrvoituresDispo(int $nbrvoitures_dispo): static
    {
        $this->nbrvoitures_dispo = $nbrvoitures_dispo;

        return $this;
    }

    public function getIdAgence(): ?int
    {
        return $this->id_agence;
    }
}
