<?php
namespace App\Entity;

use App\Repository\PackPersonnaliserRepository;
use Doctrine\ORM\Mapping as ORM;

// Importer la classe Assert pour pouvoir utiliser l'annotation @Assert\Choice
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PackPersonnaliserRepository::class)]
class PackPersonnaliser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idPackPersonnaliser = null;

    #[ORM\ManyToOne(targetEntity: Pack::class)]
    #[ORM\JoinColumn(name: 'pack_id', referencedColumnName: 'id_pack')]
    private ?Pack $pack;

    #[ORM\ManyToOne(targetEntity: Programme::class)]
    #[ORM\JoinColumn(name: 'programme_id', referencedColumnName: 'id_prog')]
    private ?Programme $programme;
    
    public function getIdPackPersonnaliser(): ?int
    {
        return $this->idPackPersonnaliser;
    }

    public function getPack(): ?Pack
    {
        return $this->pack;
    }

    public function setPack(?Pack $pack): void
    {
        $this->pack = $pack;
    }

    public function getProgramme(): ?Programme
    {
        return $this->programme;
    }

    public function setProgramme(?Programme $programme): void
    {
        $this->programme = $programme;
    }

    public function __toString(): string
    {
        return (string) $this->idPackPersonnaliser;
    }
    
    // Vos autres propriétés et méthodes...

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $selectedPacks;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $selectedPrograms;

    // Les méthodes getter et setter pour les attributs selectedPacks et selectedPrograms

    public function getSelectedPacks(): ?array
    {
        return $this->selectedPacks;
    }

    public function setSelectedPacks(array $selectedPacks): self
    {
        $this->selectedPacks = $selectedPacks;

        return $this;
    }

    public function getSelectedPrograms(): ?array
    {
        return $this->selectedPrograms;
    }

    public function setSelectedPrograms(array $selectedPrograms): self
    {
        $this->selectedPrograms = $selectedPrograms;

        return $this;
    }
}
