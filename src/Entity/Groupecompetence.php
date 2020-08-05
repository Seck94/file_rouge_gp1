<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\GroupecompetenceRepository;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=GroupecompetenceRepository::class)
 * @ApiResource(
    *        attributes={"pagination_items_per_page"=10},
    *     collectionOperations={
    *         "get"={
    *              "security"="is_granted('ROLE_ADMIN')", 
    *              "security_message"="Vous n'avez pas acces a cette ressource.",
    *              "path"="admin/groupecompetences",
    *              
    *              },
    *         "post"={
    *              "security_post_denormalize"="is_granted('EDIT', object)", 
    *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
    *              "path"="admin/groupecompetences",
    *          },
    *     },
    *     
    *     itemOperations={
    *         "get"={"security"="is_granted('VIEW',object)","security_message"="Vous n'avez pas acces a cette ressource.","path"="admin/groupecompetences/{id}",}, 
    *         "patch"={"security"="is_granted('ROLE_ADMIN')","security_message"="Seul un admin peut faire cette action.","path"="admin/groupecompetences/{id}",},
    *         "put"={"security_post_denormalize"="is_granted('ROLE_ADMIN')","security_message"="Seul un admin peut faire cette action.","path"="admin/groupecompetences/{id}",},
    *  }
 * )
 */
class Groupecompetence
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
    private $descriptif;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="groupecompetences")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity=Competence::class, mappedBy="groupecompetence")
     * @ApiSubresource()
     */
    private $competences;

    /**
     * @ORM\ManyToMany(targetEntity=Referentiel::class, inversedBy="groupecompetences")
     */
    private $referentiel;

    public function __construct()
    {
        $this->competences = new ArrayCollection();
        $this->referentiel = new ArrayCollection();
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
     * @return Collection|Competence[]
     */
    public function getCompetences(): Collection
    {
        return $this->competences;
    }

    public function addCompetence(Competence $competence): self
    {
        if (!$this->competences->contains($competence)) {
            $this->competences[] = $competence;
            $competence->addGroupecompetence($this);
        }

        return $this;
    }

    public function removeCompetence(Competence $competence): self
    {
        if ($this->competences->contains($competence)) {
            $this->competences->removeElement($competence);
            $competence->removeGroupecompetence($this);
        }

        return $this;
    }

    /**
     * @return Collection|Referentiel[]
     */
    public function getReferentiel(): Collection
    {
        return $this->referentiel;
    }

    public function addReferentiel(Referentiel $referentiel): self
    {
        if (!$this->referentiel->contains($referentiel)) {
            $this->referentiel[] = $referentiel;
        }

        return $this;
    }

    public function removeReferentiel(Referentiel $referentiel): self
    {
        if ($this->referentiel->contains($referentiel)) {
            $this->referentiel->removeElement($referentiel);
        }

        return $this;
    }
}
