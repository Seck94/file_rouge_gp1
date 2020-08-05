<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TagRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=TagRepository::class)
 *  * @ApiResource(
    *     attributes={"pagination_items_per_page"=10},
    *     collectionOperations={
    *         "get"={
    *              "security"="is_granted('ROLE_ADMIN')", 
    *              "security_message"="Vous n'avez pas acces a cette ressource.",
    *              "path"="admin/tags",
    *             
    *              },
    *         "post"={
    *              "security_post_denormalize"="is_granted('EDIT', object)", 
    *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
    *              "path"="admin/tags",
    *          },
    *     },
    *     
    *     itemOperations={
    *         "get"={"security"="is_granted('VIEW',object)","security_message"="Vous n'avez pas acces a cette ressource.","path"="admin/tags/{id}",}, 
    *         "put"={"security_post_denormalize"="is_granted('ROLE_ADMIN')","security_message"="Seul un admin peut faire cette action.","path"="admin/tags/{id}",},
    *  }
  * )
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
