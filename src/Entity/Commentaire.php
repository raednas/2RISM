<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $idcommentaire = null;

    /**
     * @ORM\ManyToOne(targetEntity=Post::class)
     * @ORM\JoinColumn(name="post_id", referencedColumnName="idpost", nullable=false)
     */
    private ?Post $post = null;

    public function getIdcommentaire(): ?int
    {
        return $this->idcommentaire;
    }
    /**
 * @ORM\Column(type="string")
 */
private $commentaire;
public function getCommentaire(): ?string
{
    return $this->commentaire;
}

public function setCommentaire(?string $commentaire): self
{
    $this->commentaire = $commentaire;
    return $this;
}

/**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $date_c;
    public function __construct()
    {
        $this->date_c = new \DateTime();
    }
public function getDateC(): ?\DateTimeInterface
{
    return $this->date_c;
}

public function setDateC(?\DateTimeInterface $date_c): self
{
    $this->date_c = $date_c;
    return $this;
}

    public function getPost(): ?Post
    {
        return $this->post;
    }

    public function setPost(?Post $post): self
    {
        $this->post = $post;

        return $this;
    }

}