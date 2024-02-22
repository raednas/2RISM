<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $nomcategorie = null;

    public function getIdcategorie(): ?int
    {
        return $this->id_categorie;
    }

    public function getNomcategorie(): ?string
    {
        return $this->nomcategorie;
    }

    public function setNomcategorie(string $nomcategorie): static
    {
        $this->nomcategorie = $nomcategorie;

        return $this;
    }

    public function __toString(): string
    {
        return $this->nomcategorie ?? ''; // Retourne le nom de la catégorie, ou une chaîne vide si le nom n'est pas défini.
    }
}
