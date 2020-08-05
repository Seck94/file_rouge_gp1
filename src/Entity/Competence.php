<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CompetenceRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=CompetenceRepository::class)
  * @ApiResource(
    *        attributes={"pagination_items_per_page"=10},
    *     collectionOperations={
    *         "get"={
    *              "security"="is_granted('ROLE_ADMIN')", 
    *              "security_message"="Vous n'avez pas acces a cette ressource.",
    *              "path"="admin/competences",
    *             
    *              },
    *         "post"={
    *              "security_post_denormalize"="is_granted('EDIT', object)", 
    *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
    *              "path"="admin/competences",
    *          },
    *     },
    *     
    *     itemOperations={
    *         "get"={"security"="is_granted('VIEW',object)","security_message"="Vous n'avez pas acces a cette ressource.","path"="admin/competences/{id}",}, 
    *         "delete"={"security"="is_granted('ROLE_ADMIN')","security_message"="Seul un admin peut faire cette action.","path"="admin/competences/{id}",},
    *         "patch"={"security"="is_granted('ROLE_ADMIN')","security_message"="Seul un admin peut faire cette action.","path"="admin/competences/{id}",},
    *         "put"={"security_post_denormalize"="is_granted('ROLE_ADMIN')","security_message"="Seul un admin peut faire cette action.","path"="admin/competences/{id}",},
    *  }
 * )
 */
class Competence
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
     * @ORM\ManyToMany(targetEntity=Groupecompetence::class, inversedBy="competences")
     */
    private $groupecompetence;

    /**
     * @ORM\OneToMany(targetEntity=Niveau::class, mappedBy="competence", orphanRemoval=true)
     */
    private $niveau;

    public function __construct()
    {
        $this->groupecompetence = new ArrayCollection();
        $this->niveau = new ArrayCollection();
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

    /**
     * @return Collection|Niveau[]
     */
    public function getNiveau(): Collection
    {
        return $this->niveau;
    }

    public function addNiveau(Niveau $niveau): self
    {
        if (!$this->niveau->contains($niveau)) {
            $this->niveau[] = $niveau;
            $niveau->setCompetence($this);
        }

        return $this;
    }

    public function removeNiveau(Niveau $niveau): self
    {
        if ($this->niveau->contains($niveau)) {
            $this->niveau->removeElement($niveau);
            // set the owning side to null (unless already changed)
            if ($niveau->getCompetence() === $this) {
                $niveau->setCompetence(null);
            }
        }

        return $this;
    }
}
