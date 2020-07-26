<?php

namespace App\Entity;

use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TagRepository::class)
 */
class Tag
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
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=Groupetag::class, inversedBy="tags")
     */
    private $groupetag;

    public function __construct()
    {
        $this->groupetag = new ArrayCollection();
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
     * @return Collection|Groupetag[]
     */
    public function getGroupetag(): Collection
    {
        return $this->groupetag;
    }

    public function addGroupetag(Groupetag $groupetag): self
    {
        if (!$this->groupetag->contains($groupetag)) {
            $this->groupetag[] = $groupetag;
        }

        return $this;
    }

    public function removeGroupetag(Groupetag $groupetag): self
    {
        if ($this->groupetag->contains($groupetag)) {
            $this->groupetag->removeElement($groupetag);
        }

        return $this;
    }
}
