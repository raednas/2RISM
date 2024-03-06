<?php
namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur implements UserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    // Ajoutez les getters et setters pour chaque attribut

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    // Implémentez les méthodes de l'interface UserInterface

    public function getUsername(): string
    {
        return (string) $this->email;
    }

    // Vos autres propriétés et méthodes ici...

    public function getRoles(): array
    {
        // Retourne les rôles de l'utilisateur sous forme de tableau
        return ['ROLE_USER'];
    }

    public function getSalt(): ?string
    {
        // Vous pouvez retourner un sel (salt) si vous utilisez l'encodage de mot de passe
        // Si vous n'utilisez pas d'encodage de mot de passe, vous pouvez retourner null
        return null;
    }

    public function eraseCredentials()
    {
        // Supprimez les données sensibles de l'utilisateur, par exemple les mots de passe en clair
    }

    public function getUserIdentifier(): string
    {
        return $this->email; // Retournez l'adresse e-mail de l'utilisateur comme identifiant
    }
}
