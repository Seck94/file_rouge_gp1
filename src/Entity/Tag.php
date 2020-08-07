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
 *     attributes={
 *          "pagination_items_per_page"=10,
 *          "normalization_context"={"groups"={"tag_read","tag_details_read"}}
 *      },
 *    collectionOperations={
 *          "add_groupecompetence"={
 *              "method"="POST",
 *              "path"="admin/tags",
 *              "security_post_denormalize"="is_granted('EDIT', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *          },
 *         "show_groupecompetence"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/tags"
 *              },
 *     },
 *     
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('VIEW',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/tags/{id}",
 *         }, 
 *         "delete"={
 *              "security"="is_granted('DELETE',object)",
 *              "security_message"="Seul le proprietaite....",
 *              "path"="admin/tags/{id}",
 *         },
 *         "patch"={
 *              "security"="is_granted('EDIT',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/tags/{id}",
 *         },
 *         "put"={
 *              "security_post_denormalize"="is_granted('EDIT', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/tags/{id}",
 *         },
 *     },
 * )
 * @ORM\Entity(repositoryClass=TagRepository::class)
 */
class Tag
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"tag_read","groupetag_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"tag_read","groupetag_read"})
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"tag_read","groupetag_read"})
     */
    private $descriptif;

    /**
     * @ORM\ManyToMany(targetEntity=Groupetag::class, mappedBy="tag")
     * @Groups({"tag_read"})
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
