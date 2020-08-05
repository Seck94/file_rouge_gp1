<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\GroupetagRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=GroupetagRepository::class)
  * @ApiResource(
    *     attributes={"pagination_items_per_page"=10},
    *     collectionOperations={
    *         "get"={
    *              "security"="is_granted('ROLE_ADMIN')", 
    *              "security_message"="Vous n'avez pas acces a cette ressource.",
    *              "path"="admin/groupetags",
    *              "normalization_context"={"groups"={"profil_read","profil_details_read"}}
    *              },
    *         "post"={
    *              "security_post_denormalize"="is_granted('EDIT', object)", 
    *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
    *              "path"="admin/groupetags",
    *          },
    *     },
    *     
    *     itemOperations={
    *         "get"={"security"="is_granted('VIEW',object)","security_message"="Vous n'avez pas acces a cette ressource.","path"="admin/groupetags/{id}",}, 
    *          "get"={"security"="is_granted('VIEW',object)","security_message"="Vous n'avez pas acces a cette ressource.","path"="admin/groupetags/{id}/tags",}, 
    *         "patch"={"security"="is_granted('ROLE_ADMIN')","security_message"="Seul un admin peut faire cette action.","path"="admin/groupetags/{id}",},
    *         "put"={"security_post_denormalize"="is_granted('ROLE_ADMIN')","security_message"="Seul un admin peut faire cette action.","path"="admin/groupetags/{id}",},
    *  }
  * )
 */
class Groupetag
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
     * @ORM\ManyToMany(targetEntity=Tag::class, mappedBy="groupetag")
     */
    private $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
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
     * @return Collection|Tag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
            $tag->addGroupetag($this);
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        if ($this->tags->contains($tag)) {
            $this->tags->removeElement($tag);
            $tag->removeGroupetag($this);
        }

        return $this;
    }
}
