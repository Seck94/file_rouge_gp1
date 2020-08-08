<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TagRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *  attributes={
 *      "normalization_context"={"groups"={"tag_read"}}
 * },
 *  
 *  collectionOperations={
 *      "get"={
 *          "path"="admin/tags"
 *      },
 *      "post"={
 *          "path"="admin/tags"
 *      }   
 *        
 * },
 *   itemOperations={
 *      "get"={
 *          "path"="admin/tags/{id}"
 *      },
 *      "put"={
 *          "path"="admin/tags/{id}"
 *      }   
 *        
 * }
 * )
 * @ORM\Entity(repositoryClass=TagRepository::class)
 */
class Tag
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"tag_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"tag_read"})
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"tag_read"})
     */
    private $descriptif;

    /**
     * @ORM\ManyToMany(targetEntity=Groupetag::class, mappedBy="tag")
     * @Groups({"tag_read"})
     * ApiSubresource
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
