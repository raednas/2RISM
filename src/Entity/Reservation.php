<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Vehicule::class)]
    #[ORM\JoinColumn(name: 'idv', referencedColumnName: 'id_vehicule')]
    private ?Vehicule $idv = null;


    #[ORM\Column(length: 200, nullable: true)]
    private ?DateTime $datedebut = null;

    
    #[ORM\Column(length: 200, nullable: true)]
    private ?DateTime $datefin = null;

    public function getid(): ?int
    {
        return $this->id;
    }

    public function getDatedebut(): ?DateTime
    {
        return $this->datedebut;
    }

    public function setDatedebut(?DateTime $datedebut): static
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?DateTime
    {
        return $this->datefin;
    }

    public function setDatefin(?DateTime $datefin): static
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getIdv(): ?Vehicule
    {
        return $this->idv;
    }

    public function setIdv(?Vehicule $idv): static
    {
        $this->idv = $idv;

        return $this;
    }

    
}
