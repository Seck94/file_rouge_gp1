<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
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
    private $descriptif;

    /**
     * @ORM\ManyToMany(targetEntity=Groupetag::class, mappedBy="tag")
     */
    private $groupetags;

    public function __construct()
    {
        $this->groupetags = new ArrayCollection();
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

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * @return Collection|Groupetag[]
     */
    public function getGroupetags(): Collection
    {
        return $this->groupetags;
    }

    public function addGroupetag(Groupetag $groupetag): self
    {
        if (!$this->groupetags->contains($groupetag)) {
            $this->groupetags[] = $groupetag;
            $groupetag->addTag($this);
        }

        return $this;
    }

    public function removeGroupetag(Groupetag $groupetag): self
    {
        if ($this->groupetags->contains($groupetag)) {
            $this->groupetags->removeElement($groupetag);
            $groupetag->removeTag($this);
        }

        return $this;
    }
}
