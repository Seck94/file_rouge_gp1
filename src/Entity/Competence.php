<?php

namespace App\Entity;

use App\Repository\CompetenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompetenceRepository::class)
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
