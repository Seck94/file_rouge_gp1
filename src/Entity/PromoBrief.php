<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PromoBriefRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PromoBriefRepository::class)
 * @ApiResource(
 *     attributes={
 *          "security"="is_granted('ROLE_ADMIN')",
 *          "pagination_items_per_page"=10, 
 *           "normalization_context"={"groups"={"user_read","user_details_read","gprincipal_read"}}
 *     },
 * 
 *     collectionOperations={
 *       
 *          "add_PromoBrief"={
 *              "method"="POST",
 *              "path"="/formateurs/promobriefs",
 *              "security"="is_granted('ROLE_FORMATEUR')",
 *              "security_message"="Vous n'avez pas le privilege"
 *       }
 *    },
 *      itemOperations={
 *          "PUT"={
 *          
 *              "path"="/formateurs/promo/{id}/brief/{num}/livrablePartiels",
 *              "security"="is_granted('ROLE_FORMATEUR')",
 *              "security_message"="Vous n'avez pas le privilege"
 *       },
 *        "get"={
 *              "security"="is_granted('ROLE_ADMIN')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="/formateurs/promo_brief/{id}",

 *          },
 *    }  
 *      
 * )
 */
class PromoBrief
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"briefs_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity=Brief::class, inversedBy="promoBriefs")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"briefs_read"})
     */
    private $brief;

    /**
     * @ORM\ManyToOne(targetEntity=Promo::class, inversedBy="promoBriefs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $promo;

    /**
     * @ORM\OneToMany(targetEntity=LivrablePartiel::class, mappedBy="promoBrief", orphanRemoval=true)
     */
    private $livrablesPartiels;

    /**
     * @ORM\OneToMany(targetEntity=PromoBriefApprenant::class, mappedBy="promoBrief")
     */
    private $promoBriefApprenants;

 

    public function __construct()
    {
        $this->livrablesPartiels = new ArrayCollection();
        $this->promoBriefApprenants = new ArrayCollection();
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

    public function getBrief(): ?Brief
    {
        return $this->brief;
    }

    public function setBrief(?Brief $brief): self
    {
        $this->brief = $brief;

        return $this;
    }

    public function getPromo(): ?Promo
    {
        return $this->promo;
    }

    public function setPromo(?Promo $promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * @return Collection|LivrablePartiel[]
     */
    public function getLivrablesPartiels(): Collection
    {
        return $this->livrablesPartiels;
    }

    public function addLivrablesPartiel(LivrablePartiel $livrablesPartiel): self
    {
        if (!$this->livrablesPartiels->contains($livrablesPartiel)) {
            $this->livrablesPartiels[] = $livrablesPartiel;
            $livrablesPartiel->setPromoBrief($this);
        }

        return $this;
    }

    public function removeLivrablesPartiel(LivrablePartiel $livrablesPartiel): self
    {
        if ($this->livrablesPartiels->contains($livrablesPartiel)) {
            $this->livrablesPartiels->removeElement($livrablesPartiel);
            // set the owning side to null (unless already changed)
            if ($livrablesPartiel->getPromoBrief() === $this) {
                $livrablesPartiel->setPromoBrief(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PromoBriefApprenant[]
     */
    public function getPromoBriefApprenants(): Collection
    {
        return $this->promoBriefApprenants;
    }

    public function addPromoBriefApprenant(PromoBriefApprenant $promoBriefApprenant): self
    {
        if (!$this->promoBriefApprenants->contains($promoBriefApprenant)) {
            $this->promoBriefApprenants[] = $promoBriefApprenant;
            $promoBriefApprenant->setPromoBrief($this);
        }

        return $this;
    }

    public function removePromoBriefApprenant(PromoBriefApprenant $promoBriefApprenant): self
    {
        if ($this->promoBriefApprenants->contains($promoBriefApprenant)) {
            $this->promoBriefApprenants->removeElement($promoBriefApprenant);
            // set the owning side to null (unless already changed)
            if ($promoBriefApprenant->getPromoBrief() === $this) {
                $promoBriefApprenant->setPromoBrief(null);
            }
        }

        return $this;
    }

  
}
