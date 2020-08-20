<?php

namespace App\Entity;

use App\Repository\PromoBriefRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PromoBriefRepository::class)
 */
class PromoBrief
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
     * @ORM\ManyToOne(targetEntity=Brief::class, inversedBy="promoBriefs")
     * @ORM\JoinColumn(nullable=false)
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
     * @ORM\ManyToOne(targetEntity=PromoBriefApprenant::class, inversedBy="promoBrief")
     */
    private $promoBriefApprenant;

    public function __construct()
    {
        $this->livrablesPartiels = new ArrayCollection();
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

    public function getPromoBriefApprenant(): ?PromoBriefApprenant
    {
        return $this->promoBriefApprenant;
    }

    public function setPromoBriefApprenant(?PromoBriefApprenant $promoBriefApprenant): self
    {
        $this->promoBriefApprenant = $promoBriefApprenant;

        return $this;
    }
}
