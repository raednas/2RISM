<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 * @ORM\Column(type="integer")
 */
private $idpost;
    /**
     * @ORM\Column(length=255)
     */
    private ?string $description = null;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="post", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $commentaires;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    
    public function getIdpost(): ?int
    {
        return $this->idpost;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
    /**
 
 * @ORM\Column(type="string", length=255, nullable=true)
 */
private $image_p;

    public function getImage_p(): ?string
    {
        return $this->image_p;
    }

    public function setImage_p(?string $image_p): self
    {
        $this->image_p = $image_p;

        return $this;
    }
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hashtag;



    public function getHashtag(): ?string
    {
        return $this->hashtag;
    }

    public function setHashtag(string $hashtag): self
    {
        $this->hashtag = $hashtag;

        return $this;
    }

    /**
     * @return Collection|Commentaire[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setPost($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            if ($commentaire->getPost() === $this) {
                $commentaire->setPost(null);
            }
        }

        return $this;
    }
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateP;

   

    /**
     * Get the value of dateP
     */ 
    public function getDateP()
    {
        return $this->dateP;
    }

    /**
     * Set the value of dateP
     *
     * @return  self
     */ 
    public function setDateP($dateP)
    {
        $this->dateP = $dateP;

        return $this;
    }
    public function __toString()
    {
        return (string) $this->getIdpost();
    }

    
    
}
