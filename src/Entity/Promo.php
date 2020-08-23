<?php

namespace App\Entity;

use App\Entity\Formateur;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PromoRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     attributes={
 *          "pagination_items_per_page"=10,
 *          "normalization_context"={"groups"={"brief_read"},"enable_max_depth"=true}
 *      },
 *     collectionOperations={
 *          "add_promo"={
 *              "method"="POST",
 *              "path"="admin/promos",
 *              "security_post_denormalize"="is_granted('ROLE_FORMATEUR', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *          },
 *         "show_promo"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/promos",
 *              "normalization_context"={"groups"={"promo_read"},"enable_max_depth"=true}
 *              },
 *          "promo_gprincipal"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/promos/principal",
 *              
 *              }
 *     },
 *     
 *     itemOperations={
 *          "promo_id_gprincipal"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/promos/{id}/principal",
 *              
 *              },
 *          "apprenants_attente"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/promos/{id}/apprenants/attente"
 *              }, 
 *          "promo_referentiel"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/promos/{id}/referentiel",
 *              "normalization_context"={"groups"={"promo_referentiel"},"enable_max_depth"=true}
 *              }, 
 *          "promo_groupe_apprenants"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/promos/{id}/groupes/apprenants",
 *              "normalization_context"={"groups"={"promo_groupe_apprenants"},"enable_max_depth"=true}
 *              }, 
 *          "promo_groupe_formateurs"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/promos/{id}/formateurs",
 *              "normalization_context"={"groups"={"promo_groupe_formateurs"},"enable_max_depth"=true}
 *              },
 *         "get"={
 *              "security"="is_granted('ROLE_CM',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/promos/{id}",
 *              "normalization_context"={"groups"={"promo_read"},"enable_max_depth"=true}
 *         }, 
 *         "delete"={
 *              "security"="is_granted('DELETE',object)",
 *              "security_message"="Seul le proprietaite....",
 *              "path"="admin/promos/{id}",
 *         },
 *         "update_promo"={
 *              "method"="PUT",
 *              "security_post_denormalize"="is_granted('ROLE_FORMATEUR', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/promos/{id}",
 *         },
 *         "gerer_apprenants"={
 *              "method"="PUT",
 *              "security_post_denormalize"="is_granted('ROLE_FORMATEUR', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/promos/{id}/apprenants",
 *         },
 *          "gerer_formateurs"={
 *              "method"="PUT",
 *              "security_post_denormalize"="is_granted('ROLE_FORMATEUR', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/promos/{id}/formateurs",
 *         },
 *         "gerer_groupes"={
 *              "method"="PUT",
 *              "security_post_denormalize"="is_granted('ROLE_FORMATEUR', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/promos/{id}/groupes",
 *         },
 *     },
 * )
 * @ORM\Entity(repositoryClass=PromoRepository::class)
 */
class Promo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"promo_read","gproupe_read","promo_referentiel","promo_groupe_apprenants","promo_groupe_formateurs","brief_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"promo_read"})
     */
    private $langue;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"promo_read","gproupe_read","promo_referentiel","promo_groupe_apprenants","promo_groupe_formateurs","brief_read"})
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"promo_read"})
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"promo_read"})
     */
    private $lieu;

    // supprimée.. type= string , length=255
    private $referenceAgate;

    /**
     * @ORM\Column(type="date")
     * @Groups({"promo_read"})
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     * @Groups({"promo_read"})
     */
    private $dateFinProvisoire;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"promo_read"})
     */
    private $fabrique;

    /**
     * @ORM\Column(type="date",nullable=true)
     */
    private $dateFinReelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"promo_read"})
     */
    private $etat;

    /**
     * @ORM\ManyToMany(targetEntity=Formateur::class, mappedBy="promo", cascade={"persist"})
     */
    private $formateurs;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="promo")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Groupe::class, mappedBy="promo", orphanRemoval=true, cascade={"persist"})
     * @Groups({"promo_read","promo_groupe_apprenants","promo_groupe_formateurs"})
     * @ApiSubresource()
     */
    private $groupes;

    /**
     * @ORM\ManyToOne(targetEntity=Referentiel::class, inversedBy="promos")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"promo_read","gproupe_read","promo_referentiel","promo_groupe_apprenants","promo_groupe_formateurs"})
     * @ApiSubresource()
     */
    private $referentiel;

    /**
     * @ORM\OneToMany(targetEntity=PromoBrief::class, mappedBy="promo", orphanRemoval=true)
     */
    private $promoBriefs;

    /**
     * @ORM\OneToOne(targetEntity=FilDeDiscussion::class, mappedBy="promo", cascade={"persist", "remove"})
     */
    private $filDeDiscussion;

    /**
     * @ORM\OneToMany(targetEntity=StatistiquesCompetences::class, mappedBy="promo")
     */
    private $statistiquesCompetences;

    public function __construct()
    {
        $this->formateurs = new ArrayCollection();
        $this->groupes = new ArrayCollection();
        $this->promoBriefs = new ArrayCollection();
        $this->statistiquesCompetences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(string $langue): self
    {
        $this->langue = $langue;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getReferenceAgate(): ?string
    {
        return $this->referenceAgate;
    }

    public function setReferenceAgate(string $referenceAgate): self
    {
        $this->referenceAgate = $referenceAgate;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFinProvisoire(): ?\DateTimeInterface
    {
        return $this->dateFinProvisoire;
    }

    public function setDateFinProvisoire(\DateTimeInterface $dateFinProvisoire): self
    {
        $this->dateFinProvisoire = $dateFinProvisoire;

        return $this;
    }

    public function getFabrique(): ?string
    {
        return $this->fabrique;
    }

    public function setFabrique(string $fabrique): self
    {
        $this->fabrique = $fabrique;

        return $this;
    }

    public function getDateFinReelle(): ?\DateTimeInterface
    {
        return $this->dateFinReelle;
    }

    public function setDateFinReelle(\DateTimeInterface $dateFinReelle): self
    {
        $this->dateFinReelle = $dateFinReelle;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

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
        if ($formateur) {
            $this->formateurs[] = $formateur; //fonctions modifiées
            $formateur->addPromo($this);
        }
        // if (!$this->formateurs->contains($formateur)) {
        //     $this->formateurs[] = $formateur;
        //     $formateur->addPromo($this);
        // }

        return $this;
    }

    public function removeFormateur(Formateur $formateur): self
    {
        if ($formateur) {
            $this->formateurs->removeElement($formateur);
            $formateur->removePromo($this);
        }
        // if ($this->formateurs->contains($formateur)) {
        //     $this->formateurs->removeElement($formateur);
        //     $formateur->removePromo($this);
        // }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
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
            $groupe->setPromo($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupes->contains($groupe)) {
            $this->groupes->removeElement($groupe);
            // set the owning side to null (unless already changed)
            if ($groupe->getPromo() === $this) {
                $groupe->setPromo(null);
            }
        }

        return $this;
    }

    public function getReferentiel(): ?Referentiel
    {
        return $this->referentiel;
    }

    public function setReferentiel(?Referentiel $referentiel): self
    {
        $this->referentiel = $referentiel;

        return $this;
    }

    /**
     * @return Collection|PromoBrief[]
     */
    public function getPromoBriefs(): Collection
    {
        return $this->promoBriefs;
    }

    public function addPromoBrief(PromoBrief $promoBrief): self
    {
        if (!$this->promoBriefs->contains($promoBrief)) {
            $this->promoBriefs[] = $promoBrief;
            $promoBrief->setPromo($this);
        }

        return $this;
    }

    public function removePromoBrief(PromoBrief $promoBrief): self
    {
        if ($this->promoBriefs->contains($promoBrief)) {
            $this->promoBriefs->removeElement($promoBrief);
            // set the owning side to null (unless already changed)
            if ($promoBrief->getPromo() === $this) {
                $promoBrief->setPromo(null);
            }
        }

        return $this;
    }

    public function getFilDeDiscussion(): ?FilDeDiscussion
    {
        return $this->filDeDiscussion;
    }

    public function setFilDeDiscussion(FilDeDiscussion $filDeDiscussion): self
    {
        $this->filDeDiscussion = $filDeDiscussion;

        // set the owning side of the relation if necessary
        if ($filDeDiscussion->getPromo() !== $this) {
            $filDeDiscussion->setPromo($this);
        }

        return $this;
    }

    /**
     * @return Collection|StatistiquesCompetences[]
     */
    public function getStatistiquesCompetences(): Collection
    {
        return $this->statistiquesCompetences;
    }

    public function addStatistiquesCompetence(StatistiquesCompetences $statistiquesCompetence): self
    {
        if (!$this->statistiquesCompetences->contains($statistiquesCompetence)) {
            $this->statistiquesCompetences[] = $statistiquesCompetence;
            $statistiquesCompetence->setPromo($this);
        }

        return $this;
    }

    public function removeStatistiquesCompetence(StatistiquesCompetences $statistiquesCompetence): self
    {
        if ($this->statistiquesCompetences->contains($statistiquesCompetence)) {
            $this->statistiquesCompetences->removeElement($statistiquesCompetence);
            // set the owning side to null (unless already changed)
            if ($statistiquesCompetence->getPromo() === $this) {
                $statistiquesCompetence->setPromo(null);
            }
        }

        return $this;
    }
}
