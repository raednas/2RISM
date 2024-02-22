<?php

namespace App\Entity;

use App\Repository\ProgrammeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProgrammeRepository::class)]
class Programme
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_prog", type: "integer")]
    private ?int $id_prog;

    #[ORM\Column(name: "image", type: "string", length: 255)]
    private ?string $image = null;

    #[ORM\Column(name: "duree", type: "datetime")]
    private ?\DateTimeInterface $duree = null;

    #[ORM\Column(name: "description_programme")]
    private $descriptionProgramme;

    #[ORM\ManyToOne(targetEntity: Categorie::class)]
    #[ORM\JoinColumn(name: "categorie_id", referencedColumnName: "id_categorie")]
    private $categorie;

    public function getId_prog(): ?int
    {
        return $this->id_prog;
    }

    public function getDescriptionProgramme(): ?string
    {
        return $this->descriptionProgramme;
    }

    public function setDescriptionProgramme(string $descriptionProgramme): self
    {
        $this->descriptionProgramme = $descriptionProgramme;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(\DateTimeInterface $duree): self
    {
        $this->duree = $duree;
        return $this;
    }
    public function getNomDeCategorie(): ?string
{
    return $this->categorie ? $this->categorie->getNomcategorie() : null;
}

public function setNomDeCategorie(?Categorie $categorie): self
{
    $this->categorie = $categorie;
    return $this;
}

    public function getCategorie(): ?Categorie
{
    return $this->categorie;
}

public function setCategorie(?Categorie $categorie): self
{
    $this->categorie = $categorie;
    return $this;
}
    public function __toString(): string
{
    return $this->getDescriptionProgramme() ?? ''; // Retourne la description du programme, ou une chaîne vide si la description n'est pas définie.
}

}
