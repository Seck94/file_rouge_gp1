<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\GroupeRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      attributes={
 *          "normalization_context"={"groups"={"gprincipal_read"},"enable_max_depth"=true}
 *      },
 *      collectionOperations={
 *          "get"={
 *              "method"="GET",
 *              "path"="/admin/groupes" ,
 *              "security"="(is_granted('ROLE_ADMIN'))", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "normalization_context"={"groups"={"gproupe_read"},"enable_max_depth"=true}
 *          },
 *         "show_apprenants_groupe"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_FORMATEUR',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupes/apprenants",
 *              "normalization_context"={"groups"={"gproupe_apprenant_read"},"enable_max_depth"=true}
 *         },
 *          "add_groupe"={
 *              "method"="POST",
 *              "path"="/admin/groupes" ,
 *              "security"="(is_granted('ROLE_FORMATEUR'))", 
 *              "security_message"="Vous n'avez pas le droit.",
 *          }
 *      },
 *      itemOperations={
 *         "get"={
 *              "security"="is_granted('ROLE_FORMATEUR',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupes/{id}",
 *         },
 *         "update_groupe"={
 *              "method"="PUT",
 *              "security_post_denormalize"="is_granted('ROLE_FORMATEUR', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/groupes/{id}",
 *         },
 *     }
 * )
 * @ORM\Entity(repositoryClass=GroupeRepository::class)
 */
class Groupe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"promo_read","gprincipal_read","gproupe_read","gproupe_apprenant_read","promo_groupe_apprenants","promo_groupe_formateurs"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"promo_read","gprincipal_read","gproupe_read","gproupe_apprenant_read","promo_groupe_apprenants","promo_groupe_formateurs"})
     */
    private $nom;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"promo_read","gprincipal_read","gproupe_read","gproupe_apprenant_read","promo_groupe_apprenants","promo_groupe_formateurs"})
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"promo_read","gprincipal_read","gproupe_read","gproupe_apprenant_read","promo_groupe_apprenants","promo_groupe_formateurs"})
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity=Apprenant::class, mappedBy="groupe",cascade={"persist"})
     * @Groups({"promo_read","gprincipal_read","gproupe_read","gproupe_apprenant_read","promo_groupe_apprenants"})
     * @ApiSubresource()
     */
    private $apprenants;

    /**
     * @ORM\ManyToMany(targetEntity=Formateur::class, mappedBy="groupe",cascade={"persist"})
     * @Groups({"promo_read","gprincipal_read","gproupe_read","promo_groupe_formateurs"})
     */
    private $formateurs;

    /**
     * @ORM\ManyToOne(targetEntity=Promo::class, inversedBy="groupes",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"gproupe_read"})
     */
    private $promo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $idFormateurPrincipal;

    public function __construct()
    {
        $this->apprenants = new ArrayCollection();
        $this->formateurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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
            $apprenant->addGroupe($this);
        }

        return $this;
    }

    public function removeApprenant(Apprenant $apprenant): self
    {
        if ($this->apprenants->contains($apprenant)) {
            $this->apprenants->removeElement($apprenant);
            $apprenant->removeGroupe($this);
        }

        return $this;
    }

    /**
     * @return Collection|Formateur[]
     */
    public function getFormateurs(): Collection
    {
        return $this->formateurs;
    }

    public function addFormateur(Formateur $formateur): self
    {
        if (!$this->formateurs->contains($formateur)) {
            $this->formateurs[] = $formateur;
            $formateur->addGroupe($this);
        }

        return $this;
    }

    public function removeFormateur(Formateur $formateur): self
    {
        if ($this->formateurs->contains($formateur)) {
            $this->formateurs->removeElement($formateur);
            $formateur->removeGroupe($this);
        }

        return $this;
    }

    public function getPromo(): ?Promo
    {
        return $this->promo;
    }

    public function setPromo(?Promo $promo): self
    {
        $this->promo = $promo;

        return $this;
    }

    public function getIdFormateurPrincipal(): ?string
    {
        return $this->idFormateurPrincipal;
    }

    public function setIdFormateurPrincipal(?string $idFormateurPrincipal): self
    {
        $this->idFormateurPrincipal = $idFormateurPrincipal;

        return $this;
    }
}
