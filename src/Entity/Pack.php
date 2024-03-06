<?php
namespace App\Entity;

use App\Entity\Typepack;
use App\Repository\PackRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PackRepository::class)]
class Pack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_pack", type: "integer")]
    public ?int $id_pack = null;

    #[ORM\Column(length: 255)]
    public ?string $nom_pack = null;

    #[ORM\Column(length: 255)]
    public ?string $description_pack = null;

    #[ORM\Column(type: "float")]
    public ?float $prix = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    public ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    public ?string $image = null;

    #[ORM\ManyToOne(targetEntity: Typepack::class)]
    #[ORM\JoinColumn(name: "id_typepack", referencedColumnName: "id_typepack", nullable: false)]
    public ?Typepack $typePack = null;

    // Getters and setters

    public function getIdPack(): ?int
    {
        return $this->id_pack;
    }



    #[ORM\Column(type: "boolean")]
    public ?bool $disponible = true; // Par défaut, le pack est disponible

    // Getters and setters

    public function isDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): self
    {
        $this->disponible = $disponible;
        return $this;
    }

    

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }
    public function getNomPack(): ?string
    {
        return $this->nom_pack;
    }

    public function setNomPack(string $nom_pack): static
    {
        $this->nom_pack = $nom_pack;

        return $this;
    }

    public function getDescriptionPack(): ?string
    {
        return $this->description_pack;
    }

    public function setDescriptionPack(string $description_pack): static
    {
        $this->description_pack = $description_pack;

        return $this;
    }

    // Autres getters et setters...

    public function getTypePack(): ?string
    {
        return $this->typePack ? $this->typePack->getNomTypePack() : null;
    }

    public function setTypePack(?Typepack $typePack): static
    {
        $this->typePack = $typePack;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getNomPack() ?? ''; // Retourne le nom du pack, ou une chaîne vide si le nom n'est pas défini.
    }

    public function getPrixColor(): string
    {
        if ($this->prix < 50) {
            return 'prix-bas';
        } elseif ($this->prix < 100) {
            return 'prix-moyen';
        } else {
            return 'prix-eleve';
        }
    }
}
