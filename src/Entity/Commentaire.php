<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommentaireRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 * @ApiResource(
*      collectionOperations={
*         "postedByFormateur"={
*           "method"="POST",
*          "security"="is_granted('ROLE_FORMATEUR') ",
*          "security_message"="Seul un formateur peut faire cette action.",
*          "path"="formateurs/livrablepartiels/{id}/commentaires"
*           },
*           "postedByApprenant"={
*           "method"="POST",
*          "security"="is_granted('ROLE_APPRENANT') ",
*          "security_message"="Seul un Apprenant peut faire cette action.",
*          "path"="apprenants/livrablepartiels/{id}/commentaires"
*           },
*          "get"={
*              "security"="is_granted('ROLE_FORMATEUR')", 
*              "security_message"="Vous n'avez pas acces a cette ressource.",
*              "path"="formateurs/livrablepartiels/{id}/commentaires"
*              }
*     },
*       itemOperations={
*         "get"={
*              "security"="is_granted('ROLE_FORMATEUR')",
*              "security_message"="Vous n'avez pas ces privileges.",
*               "path"="formateurs/livrablepartiels/commentaires/{id}"
*             
*              
*          }
*         }
*)
 */
class Commentaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $libelle;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $pj;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=LivrableRendu::class, inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $livrableRendu;

    /**
     * @ORM\ManyToOne(targetEntity=Formateur::class, inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=true)
     */
    private $formateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getPj()
    {
        return $this->pj;
    }

    public function setPj($pj): self
    {
        $this->pj = $pj;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLivrableRendu(): ?LivrableRendu
    {
        return $this->livrableRendu;
    }

    public function setLivrableRendu(?LivrableRendu $livrableRendu): self
    {
        $this->livrableRendu = $livrableRendu;

        return $this;
    }

    public function getFormateur(): ?Formateur
    {
        return $this->formateur;
    }

    public function setFormateur(?Formateur $formateur): self
    {
        $this->formateur = $formateur;

        return $this;
    }
}
