<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\LivrableRenduRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=LivrableRenduRepository::class)
 * @ApiResource(
 *  *     attributes={
 *          "pagination_items_per_page"=10,
 *          "normalization_context"={"groups"={"profil_read","profil_details_read"},"enable_max_depth"=true}
 *      },
 *    
 *     
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="apprenants_livrablepartiels/{id}",
 *         }, 
 *         
 *         "put"={
 *              "security_post_denormalize"="is_granted('ROLE_ADMIN')", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="apprenants/{id}/livrablepartiels/{num}",
 *         },
 *     },
 * )
 */
class LivrableRendu
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $delai;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateRendu;

    /**
     * @ORM\ManyToOne(targetEntity=LivrablePartiel::class, inversedBy="livrableRendus")
     * @ORM\JoinColumn(nullable=false)
     */
    private $livrablePartiel;

    /**
     * @ORM\ManyToOne(targetEntity=Apprenant::class, inversedBy="livrableRendus")
     * @ORM\JoinColumn(nullable=false)
     */
    private $apprenant;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="livrableRendu", orphanRemoval=true)
     */
    private $commentaires;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDelai(): ?\DateTimeInterface
    {
        return $this->delai;
    }

    public function setDelai(?\DateTimeInterface $delai): self
    {
        $this->delai = $delai;

        return $this;
    }

    public function getDateRendu(): ?\DateTimeInterface
    {
        return $this->dateRendu;
    }

    public function setDateRendu(?\DateTimeInterface $dateRendu): self
    {
        $this->dateRendu = $dateRendu;

        return $this;
    }

    public function getLivrablePartiel(): ?LivrablePartiel
    {
        return $this->livrablePartiel;
    }

    public function setLivrablePartiel(?LivrablePartiel $livrablePartiel): self
    {
        $this->livrablePartiel = $livrablePartiel;

        return $this;
    }

    public function getApprenant(): ?Apprenant
    {
        return $this->apprenant;
    }

    public function setApprenant(?Apprenant $apprenant): self
    {
        $this->apprenant = $apprenant;

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
            $commentaire->setLivrableRendu($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->contains($commentaire)) {
            $this->commentaires->removeElement($commentaire);
            // set the owning side to null (unless already changed)
            if ($commentaire->getLivrableRendu() === $this) {
                $commentaire->setLivrableRendu(null);
            }
        }

        return $this;
    }
}
