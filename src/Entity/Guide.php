<?php

namespace App\Entity;

use App\Repository\GuideRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: GuideRepository::class)]
class Guide
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_Guide = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le nom du guide ne peut pas être vide.')]
    #[Assert\Regex(
        pattern: '/^[A-Za-z]+$/',
        message: 'Le nom du guide doit contenir uniquement des caractères alphabétiques.'
    )]
    #[Assert\Length(
        max: 10,
        maxMessage: 'Le nom du guide ne doit pas dépasser {{ limit }} caractères.'
    )]
    private ?string $Nom_Guide = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le prénom du guide ne peut pas être vide.')]
    #[Assert\Regex(
        pattern: '/^[A-Za-z]+$/',
        message: 'Le prénom du guide doit contenir uniquement des caractères alphabétiques.'
    )]
    #[Assert\Length(
        max: 10,
        maxMessage: 'Le prénom du guide ne doit pas dépasser {{ limit }} caractères.'
    )]
    private ?string $Prenom_Guide = null;

    #[ORM\Column(length: 5)]
    #[Assert\NotBlank(message: 'L\'âge du guide ne peut pas être vide.')]
    #[Assert\Length(
        max: 5,
        maxMessage: 'L\'âge du guide ne doit pas dépasser {{ limit }} caractères.'
    )]
    private ?string $Age_Guide = null;

    #[ORM\Column(length: 255)]
    private ?string $Sexe_Guide = null;

    public function getIdGuide(): ?int
    {
        return $this->id_Guide;
    }

    public function getNomGuide(): ?string
    {
        return $this->Nom_Guide;
    }

    public function setNomGuide(string $Nom_Guide): static
    {
        $this->Nom_Guide = $Nom_Guide;

        return $this;
    }

    public function getPrenomGuide(): ?string
    {
        return $this->Prenom_Guide;
    }

    public function setPrenomGuide(string $Prenom_Guide): static
    {
        $this->Prenom_Guide = $Prenom_Guide;

        return $this;
    }

    public function getAgeGuide(): ?string
    {
        return $this->Age_Guide;
    }

    public function setAgeGuide(string $Age_Guide): static
    {
        $this->Age_Guide = $Age_Guide;

        return $this;
    }

    public function getSexeGuide(): ?string
    {
        return $this->Sexe_Guide;
    }

    public function setSexeGuide(string $Sexe_Guide): static
    {
        $this->Sexe_Guide = $Sexe_Guide;

        return $this;
    }
}