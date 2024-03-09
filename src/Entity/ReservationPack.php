<?php

namespace App\Entity;

use App\Repository\ReservationPackRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[Assert\Callback(callback: 'validateDates')]
class ReservationPack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_ReservationPack = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank]
    #[Assert\GreaterThan("today", message: "La date de début doit être ultérieure à aujourd'hui")]
    private ?\DateTimeInterface $date_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\ManyToOne(targetEntity: PackPersonnaliser::class)]
    #[ORM\JoinColumn(name: 'id_pack_personnaliser', referencedColumnName: 'id_pack_personnaliser')]
    private ?PackPersonnaliser $packPersonnaliser = null;

    public function getId_ReservationPack(): ?int
    {
        return $this->id_ReservationPack;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): static
    {
        $this->date_debut = $date_debut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): static
    {
        $this->date_fin = $date_fin;
        return $this;
    }

    public function getPackPersonnaliser(): ?PackPersonnaliser
    {
        return $this->packPersonnaliser;
    }

    public function setPackPersonnaliser(?PackPersonnaliser $packPersonnaliser): static
    {
        $this->packPersonnaliser = $packPersonnaliser;
        return $this;
    }

    public function validateDates(ExecutionContextInterface $context)
    {
        // Vérifie si la date de fin est ultérieure à la date de début
        if ($this->date_fin <= $this->date_debut) {
            $context->buildViolation('La date de fin doit être ultérieure à la date de début')
                ->atPath('date_fin')
                ->addViolation();
        }
    }
}
