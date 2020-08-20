<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProfilsortieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 
 * attributes={
 *          "pagination_items_per_page"=10,
 *          "normalization_context"={"groups"={"profilsortie_read","profilsortie_apprenants_read"},"enable_max_depth"=true}
 *      },
 * 
 *     collectionOperations={
 *         "post"={
 *              "security_post_denormalize"="is_granted('EDIT', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/profilsorties",
 *          },
 *         "get"={
 *              "security"="is_granted('ROLE_APPRENANT')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/profilsorties",
 *              
 *              },
 *     },
 *     
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('VIEW',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/profilsorties/{id}",
 *         }, 

 *          "get"=
 *              {
 *              "security"="is_granted('ROLE_FORMATEUR')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="api/profilsorties/{id}/apprenants",
 *              "normalization_context"={"groups"={"profilsortie_apprenants_read"}},
 *              },
 
 *         "delete"={
 *              "security"="is_granted('DELETE',object)",
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/profilsorties/{id}",
 *         },
 *         "patch"={
 *              "security"="is_granted('EDIT',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/profilsorties/{id}",
 *         },
 *         "put"={
 *              "security_post_denormalize"="is_granted('EDIT', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/profilsorties/{id}",
 *         },
 *     },
 * )
 * @ORM\Entity(repositoryClass=ProfilsortieRepository::class)
 */
class Profilsortie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups ({"profilsortie_read","profilsortie_apprenants_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups ({"profilsortie_read","profilsortie_apprenants_read"})
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=Apprenant::class, mappedBy="profilsortie")
     *@Groups ({"profilsortie_apprenants_read"})
     *@ApiSubresource()
     */
    private $apprenants;

    public function __construct()
    {
        $this->apprenants = new ArrayCollection();
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
     * @return Collection|Apprenant[]
     */
    public function getApprenants(): Collection
    {
        return $this->apprenants;
    }

    public function addApprenant(Apprenant $apprenant): self
    {
        if (!$this->apprenants->contains($apprenant)) {
            $this->apprenants[] = $apprenant;
            $apprenant->setProfilsortie($this);
        }

        return $this;
    }

    public function removeApprenant(Apprenant $apprenant): self
    {
        if ($this->apprenants->contains($apprenant)) {
            $this->apprenants->removeElement($apprenant);
            // set the owning side to null (unless already changed)
            if ($apprenant->getProfilsortie() === $this) {
                $apprenant->setProfilsortie(null);
            }
        }

        return $this;
    }
}