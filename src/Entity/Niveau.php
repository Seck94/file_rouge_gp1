<?php

namespace App\Entity;

use App\Repository\NiveauRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NiveauRepository::class)
 */
class Niveau
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
    private $critereevoluation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $groupeaction;

    /**
     * @ORM\ManyToOne(targetEntity=Competence::class, inversedBy="niveau")
     * @ORM\JoinColumn(nullable=false)
     */
    private $competence;

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

    public function getCritereevoluation(): ?string
    {
        return $this->critereevoluation;
    }

    public function setCritereevoluation(string $critereevoluation): self
    {
        $this->critereevoluation = $critereevoluation;

        return $this;
    }

    public function getGroupeaction(): ?string
    {
        return $this->groupeaction;
    }

    public function setGroupeaction(string $groupeaction): self
    {
        $this->groupeaction = $groupeaction;

        return $this;
    }

    public function getCompetence(): ?Competence
    {
        return $this->competence;
    }

    public function setCompetence(?Competence $competence): self
    {
        $this->competence = $competence;

        return $this;
    }
}
