<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReferentielRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 * *     attributes={
 *          "security"="is_granted('ROLE_ADMIN')",
 *          "pagination_items_per_page"=10, 
 *          "normalization_context"={"groups"={"referentiel_read","user_details_read","referentiel_groupecompetence_read"}}
 *     },
 * 
 *     collectionOperations={
 *          "add_referentiel"={
 *              "method"="POST",
 *              "path"="/admin/referentiels",
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas le privilege"
 *          },
 *         "get"={
 *              "security"="is_granted('ROLE_ADMIN')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/referentiels",
 *             
 *          },
 *           "show_groupecompetence"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/referentiels"
 *              },
 *              
 *           "show_referentiel_groupecompetence"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/referentiels/groupecompetences",
 *              "normalization_context"={"groups"={"referentiel_groupecompetence_read","user_details_read"}}
 *              },
 *     },
 *     
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('VIEW',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/referentiels/{id}",
 *          },
 *         "delete"={
 *              "security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/referentiels/{id}",
 *          },
 *         "update_referentiel"={
 *              "method"="PATCH",
 *              "security"="is_granted('ROLE_ADMIN')", 
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/referentiels/{id}",
 *          },
 *         "update_referentiel"={
 *              "method"="PUT",
 *              "security_post_denormalize"="is_granted('ROLE_ADMIN')", 
 *              "security_message"="Vous n'avez pas ces privileges.",
 *              "path"="admin/referentiels/{id}",
 *          },
 *     },
 * )
 * @ORM\Entity(repositoryClass=ReferentielRepository::class)
 */
class Referentiel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"referentiel_read","Grpcompetence_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"referentiel_read"})
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Groups({"referentiel_read"})
     */
    private $presentation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"referentiel_read"})
     */
    private $programme;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"referentiel_read"})
     */
    private $critereAdmission;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"referentiel_read"})
     */
    private $critereEvaluation;

    /**
     * @ORM\OneToMany(targetEntity=Promo::class, mappedBy="referentiel")
     */
    private $promos;

    /**
     * @ORM\ManyToMany(targetEntity=Groupecompetence::class, inversedBy="referentiels",cascade={"persist"})
     * @ApiSubresource()
     * @Groups({"referentiel_read","referentiel_groupecompetence_read"})
     */
    private $groupecompetence;

    public function __construct()
    {
        $this->promos = new ArrayCollection();
        $this->groupecompetence = new ArrayCollection();
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

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getProgramme(): ?string
    {
        return $this->programme;
    }

    public function setProgramme(string $programme): self
    {
        $this->programme = $programme;

        return $this;
    }

    public function getCritereAdmission(): ?string
    {
        return $this->critereAdmission;
    }

    public function setCritereAdmission(string $critereAdmission): self
    {
        $this->critereAdmission = $critereAdmission;

        return $this;
    }

    public function getCritereEvaluation(): ?string
    {
        return $this->critereEvaluation;
    }

    public function setCritereEvaluation(string $critereEvaluation): self
    {
        $this->critereEvaluation = $critereEvaluation;

        return $this;
    }

    /**
     * @return Collection|Promo[]
     */
    public function getPromos(): Collection
    {
        return $this->promos;
    }

    public function addPromo(Promo $promo): self
    {
        if (!$this->promos->contains($promo)) {
            $this->promos[] = $promo;
            $promo->setReferentiel($this);
        }

        return $this;
    }

    public function removePromo(Promo $promo): self
    {
        if ($this->promos->contains($promo)) {
            $this->promos->removeElement($promo);
            // set the owning side to null (unless already changed)
            if ($promo->getReferentiel() === $this) {
                $promo->setReferentiel(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Groupecompetence[]
     */
    public function getGroupecompetence(): Collection
    {
        return $this->groupecompetence;
    }

    public function addGroupecompetence(Groupecompetence $groupecompetence): self
    {
        if (!$this->groupecompetence->contains($groupecompetence)) {
            $this->groupecompetence[] = $groupecompetence;
        }

        return $this;
    }

    public function removeGroupecompetence(Groupecompetence $groupecompetence): self
    {
        if ($this->groupecompetence->contains($groupecompetence)) {
            $this->groupecompetence->removeElement($groupecompetence);
        }

        return $this;
    }
}
