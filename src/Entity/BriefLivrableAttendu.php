<?php

namespace App\Entity;

use App\Repository\BriefLivrableAttenduRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BriefLivrableAttenduRepository::class)
 */
class BriefLivrableAttendu
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=LivrableAttendu::class, inversedBy="briefLivrableAttendus",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $LivrableAttendu;

    /**
     * @ORM\ManyToOne(targetEntity=Brief::class, inversedBy="briefLivrableAttendus")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Brief;

    /**
     * @ORM\OneToMany(targetEntity=Livrable::class, mappedBy="briefLivrableAttendu")
     */
    private $livrables;

    

    public function __construct()
    {
        $this->livrables = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLivrableAttendu(): ?LivrableAttendu
    {
        return $this->LivrableAttendu;
    }

    public function setLivrableAttendu(?LivrableAttendu $LivrableAttendu): self
    {
        $this->LivrableAttendu = $LivrableAttendu;

        return $this;
    }

    public function getBrief(): ?Brief
    {
        return $this->Brief;
    }

    public function setBrief(?Brief $Brief): self
    {
        $this->Brief = $Brief;
        return $this;
    }

    /**
     * @return Collection|Livrable[]
     */
    public function getLivrables(): Collection
    {
        return $this->livrables;
    }

    public function addLivrable(Livrable $livrable): self
    {
        if (!$this->livrables->contains($livrable)) {
            $this->livrables[] = $livrable;
            $livrable->setBriefLivrableAttendu($this);
        }

        return $this;
    }

    public function removeLivrable(Livrable $livrable): self
    {
        if ($this->livrables->contains($livrable)) {
            $this->livrables->removeElement($livrable);
            // set the owning side to null (unless already changed)
            if ($livrable->getBriefLivrableAttendu() === $this) {
                $livrable->setBriefLivrableAttendu(null);
            }
        }

        return $this;
    }

    
    
}
