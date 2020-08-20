<?php

namespace App\Entity;

use App\Repository\StatistiquesCompetencesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatistiquesCompetencesRepository::class)
 */
class StatistiquesCompetences
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Apprenant::class, inversedBy="statistiquesCompetences")
     * @ORM\JoinColumn(nullable=false)
     */
    private $apprenant;

    /**
     * @ORM\ManyToOne(targetEntity=Referentiel::class, inversedBy="statistiquesCompetences")
     * @ORM\JoinColumn(nullable=false)
     */
    private $referentiel;

    /**
     * @ORM\ManyToOne(targetEntity=Competence::class, inversedBy="statistiquesCompetences")
     */
    private $competence;

    /**
     * @ORM\ManyToOne(targetEntity=Promo::class, inversedBy="statistiquesCompetences")
     */
    private $promo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApprenant(): ?Apprenant
    {
        return $this->apprenant;
    }

    public function setApprenant(?Apprenant $apprenant): self
    {
        $this->apprenant = $apprenant;

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

    public function getCompetence(): ?Competence
    {
        return $this->competence;
    }

    public function setCompetence(?Competence $competence): self
    {
        $this->competence = $competence;

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
}
