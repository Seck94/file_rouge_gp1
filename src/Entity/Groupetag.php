<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\GroupetagRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     attributes={
 *          "pagination_items_per_page"=10,
 *          "normalization_context"={"groups"={"groupetag_read","groupetag_details_read"},"enable_max_depth"=true}
 *      },
 *     collectionOperations={
 *         "post"={
 *              "security_post_denormalize"="is_granted('EDIT', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupetags",
 *          },
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/groupetags",
 *              
 *              },
 *     },
 *     
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('VIEW',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupetags/{id}",
 *         }, 
 *         "delete"={
 *              "security"="is_granted('DELETE',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupetags/{id}",
 *         },
 *         "patch"={
 *              "security"="is_granted('EDIT',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupetags/{id}",
 *         },
 *         "put"={
 *              "security_post_denormalize"="is_granted('EDIT', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupetags/{id}",
 *         },
 *     },
 * )
 * @ORM\Entity(repositoryClass=GroupetagRepository::class)
 */
class Groupetag
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"groupetag_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"groupetag_read"})
     */
    private $libelle;

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, inversedBy="groupetags")
     * @ApiSubresource()
     */
    private $tag;

    public function __construct()
    {
        $this->tag = new ArrayCollection();
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
    public function getTag(): Collection
    {
        return $this->tag;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tag->contains($tag)) {
            $this->tag[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        if ($this->tag->contains($tag)) {
            $this->tag->removeElement($tag);
        }

        return $this;
    }
}
