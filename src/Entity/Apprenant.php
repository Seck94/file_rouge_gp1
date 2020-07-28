<?php

namespace App\Entity;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ApprenantRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=ApprenantRepository::class)
 * @ApiResource(
  *     attributes={"security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_FORMATEUR') ","pagination_items_per_page"=20,"normalization_context"={"groups"={"not_img"}}},
 *     collectionOperations={
 *         "post"={"security"="is_granted('ROLE_ADMIN')", "security_message"="Seul l'administrateur peut effectuer ceci!!!!","security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/apprenants",},
 *         "get"={"security"="is_granted('ROLE_ADMIN')", "security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/apprenants","normalization_context"={"groups"={"apprenant_read","apprenants_details_read"}}},
*           "get_apprenants"={
 *              "method"="GET",
 *              "path"="/apprenants" ,
 *              "access_control"="is_granted('ROLE_FORMATEUR')",
 *              "access_control_message"="Vous n'avez pas access à cette Ressource",
 *              "route_name"="apprenant_liste",
 *               
 *          },
 * 
 *          "get_formateurs"={
 *              "method"="GET",
 *              "path"="/formateurs" ,
 *              "access_control"="is_granted('ROLE_ADMIN')",
 *              "access_control_message"="Vous n'avez pas access à cette Ressource",
 *              "route_name"="formateur_liste",
 *               
 *          },
 * 
 *          "get_admins"={
 *              "method"="GET",
 *              "path"="/admins" ,
 *              "access_control"="is_granted('ROLE_ADMIN')",
 *              "access_control_message"="Vous n'avez pas access à cette Ressource",
 *              "route_name"="admin_liste",
 *               
 *          }
 * 
 *          
 * 
 * 
 * 
 *          
 * },
 *     
 *     itemOperations={
 *         "get"={"security"="is_granted('ROLE_ADMIN')",
 *               "security_message"="Seul l'administrateur peut effectuer ceci!!!!",
 *               "path"="admin/apprenants/{id}",
 * }, 
 *         "delete"={"security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Seul l'administrateur peut effectuer ceci!!!!",
 *              "path"="admin/apprenants/{id}",}
 * ,
 *         "patch"={"security"="is_granted('ROLE_ADMIN')","security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/apprenants/{id}",},
 *         "put"={"security_post_denormalize"="is_granted('ROLE_ADMIN')","security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/apprenants/{id}",},
 *          "get_apprenant"=
 *            {
 *              "method"="GET",
 *              "path"="/apprenants/{id}",
 *              "requirements"={"id"="\d+"},
 *              "security"="(is_granted('ROLE_FORMATEUR'))",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 * 
 *          "get_formateur"=
 *            {
 *              "method"="GET",
 *              "path"="/formateurs/{id}",
 *              "requirements"={"id"="\d+"},
 *              "security"="(is_granted('ROLE_FORMATEUR'))",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 * 
 *          "get_admin"=
 *            {
 *              "method"="GET",
 *              "path"="/admins/{id}",
 *              "requirements"={"id"="\d+"},
 *              "security"="(is_granted('ROLE_FORMATEUR'))",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 *     }
 * )
 */
class Apprenant extends User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Groupe::class, mappedBy="apprenant")
     */
    private $groupes;

    /**
     * @ORM\ManyToOne(targetEntity=Profilsortie::class, inversedBy="apprenants")
     */
    private $profilsortie;

    public function __construct()
    {
        $this->groupes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Groupe[]
     */
    public function getGroupes(): Collection
    {
        return $this->groupes;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupes->contains($groupe)) {
            $this->groupes[] = $groupe;
            $groupe->addApprenant($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->contains($groupe)) {
            $this->groupes->removeElement($groupe);
            $groupe->removeApprenant($this);
        }

        return $this;
    }

    public function getProfilsortie(): ?Profilsortie
    {
        return $this->profilsortie;
    }

    public function setProfilsortie(?Profilsortie $profilsortie): self
    {
        $this->profilsortie = $profilsortie;

        return $this;
    }
}
