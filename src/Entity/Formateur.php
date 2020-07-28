<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Groupe;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormateurRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=FormateurRepository::class)
 * @ApiResource(
 
 *     attributes={"security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_FORMATEUR') ","pagination_items_per_page"=20,"normalization_context"={"groups"={"not_img"}}},
 *     collectionOperations={
 *         "post"={"security"="is_granted('ROLE_ADMIN')", "security_message"="Seul l'administrateur peut effectuer ceci!!!!","security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/formateurs",},
 *         "get"={"security"="is_granted('ROLE_ADMIN')", "security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/formateurs","normalization_context"={"groups"={"formateurs_read","formateurs_details_read"}}},
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
 *               "path"="admin/formateurs/{id}",
 * }, 
 *         "delete"={"security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Seul l'administrateur peut effectuer ceci!!!!",
 *              "path"="admin/formateurs/{id}",}
 * ,
 *         "patch"={"security"="is_granted('ROLE_ADMIN')","security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/formateurs/{id}",},
 *         "put"={"security_post_denormalize"="is_granted('ROLE_ADMIN')","security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/formateurs/{id}",},
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
class Formateur extends User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Groupe::class, inversedBy="formateurs")
     */
    private $groupe;

    /**
     * @ORM\ManyToMany(targetEntity=Promo::class, inversedBy="formateurs")
     */
    private $promo;

    public function __construct()
    {
        $this->groupe = new ArrayCollection();
        $this->promo = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Groupe[]
     */
    public function getGroupe(): Collection
    {
        return $this->groupe;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupe->contains($groupe)) {
            $this->groupe[] = $groupe;
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupe->contains($groupe)) {
            $this->groupe->removeElement($groupe);
        }

        return $this;
    }

    /**
     * @return Collection|Promo[]
     */
    public function getPromo(): Collection
    {
        return $this->promo;
    }

    public function addPromo(Promo $promo): self
    {
        if (!$this->promo->contains($promo)) {
            $this->promo[] = $promo;
        }

        return $this;
    }

    public function removePromo(Promo $promo): self
    {
        if ($this->promo->contains($promo)) {
            $this->promo->removeElement($promo);
        }

        return $this;
    }
}
