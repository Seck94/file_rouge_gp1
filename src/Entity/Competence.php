<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CompetenceRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      attributes={
 *          "pagination_items_per_page"=10,
 *          "normalization_context"={"groups"={"competence_read"},"enable_max_depth"=true}
 *      },
 *     collectionOperations={
 *          "add_competence"={
 *              "method"="POST",
 *              "path"="admin/competences",
 *              "security_post_denormalize"="is_granted('EDIT', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *          },
 *         "show_competence"={
 *              "method"="GET",
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              "path"="admin/competences"
 *              },
 *     },
 *     
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('VIEW',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/competences/{id}",
 *         }, 
 *         "delete"={
 *              "security"="is_granted('DELETE',object)",
 *              "security_message"="Seul le proprietaite....",
 *              "path"="admin/competences/{id}",
 *         },
 *         "update_competence"={
 *              "method"="PATCH",
 *              "security"="is_granted('EDIT',object)", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/competences/{id}",
 *         },
 *         "update_competence"={
 *              "method"="PUT",
 *              "security_post_denormalize"="is_granted('EDIT', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="admin/competences/{id}",
 *         },
 *     },
 * )
 * @ORM\Entity(repositoryClass=CompetenceRepository::class)
 */
class Competence
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"competence_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Grpcompetence_read","competence_read","Grpcompetence_competence_read"})
     */
    private $libelle;

    /**
     * @ORM\ManyToMany(targetEntity=Groupecompetence::class, mappedBy="competence", cascade={"persist"})
     * @ApiSubresource()
     */
    private $groupecompetences;

    /**
     * @ORM\OneToMany(targetEntity=Niveau::class, mappedBy="competence", cascade={"persist"})
     * @Groups({"competence_read"})
     * @ApiSubresource()
     */
    private $niveau;

    public function __construct()
    {
        $this->groupecompetences = new ArrayCollection();
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
    public function getGroupecompetences(): Collection
    {
        return $this->groupecompetences;
    }

    public function addGroupecompetence(Groupecompetence $groupecompetence): self
    {
        if (!$this->groupecompetences->contains($groupecompetence)) {
            $this->groupecompetences[] = $groupecompetence;
            $groupecompetence->addCompetence($this);
        }

        return $this;
    }

    public function removeGroupecompetence(Groupecompetence $groupecompetence): self
    {
        if ($this->groupecompetences->contains($groupecompetence)) {
            $this->groupecompetences->removeElement($groupecompetence);
            $groupecompetence->removeCompetence($this);
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
