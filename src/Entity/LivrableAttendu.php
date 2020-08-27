<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use App\Repository\LivrableAttenduRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=LivrableAttenduRepository::class)
 */
class LivrableAttendu
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"brief_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"brief_read"})
     */
    private $libelle;

    


    /**
     * @ORM\OneToMany(targetEntity=BriefLivrableAttendu::class, mappedBy="LivrableAttendu", orphanRemoval=true)
     */
    private $briefLivrableAttendus;


    public function __construct()
    {
        $this->briefs = new ArrayCollection();
        $this->livrables = new ArrayCollection();
        $this->briefLivrableAttendus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    

    /**
     * @return Collection|BriefLivrableAttendu[]
     */
    public function getBriefLivrableAttendus(): Collection
    {
        return $this->briefLivrableAttendus;
    }

    public function addBriefLivrableAttendu(BriefLivrableAttendu $briefLivrableAttendu): self
    {
        if (!$this->briefLivrableAttendus->contains($briefLivrableAttendu)) {
            $this->briefLivrableAttendus[] = $briefLivrableAttendu;
            $briefLivrableAttendu->setLivrableAttendu($this);
        }

        return $this;
    }

    public function removeBriefLivrableAttendu(BriefLivrableAttendu $briefLivrableAttendu): self
    {
        if ($this->briefLivrableAttendus->contains($briefLivrableAttendu)) {
            $this->briefLivrableAttendus->removeElement($briefLivrableAttendu);
            // set the owning side to null (unless already changed)
            if ($briefLivrableAttendu->getLivrableAttendu() === $this) {
                $briefLivrableAttendu->setLivrableAttendu(null);
            }
        }

        return $this;
    }
}
