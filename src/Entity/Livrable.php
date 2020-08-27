<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\LivrableRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=LivrableRepository::class)
 */
class Livrable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"brief_read"})
     */
    private $url;

    

    /**
     * @ORM\ManyToOne(targetEntity=Apprenant::class, inversedBy="livrables")
     * @ORM\JoinColumn(nullable=false)
     */
    private $apprenant;

    /**
     * @ORM\ManyToOne(targetEntity=BriefLivrableAttendu::class, inversedBy="livrables")
     * @ORM\JoinColumn(nullable=false)
     */
    private $briefLivrableAttendu;

    

    


    public function __construct()
    {
        $this->livrableAttendu = new ArrayCollection();
        $this->briefLivrableAttendus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
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

    public function getBriefLivrableAttendu(): ?BriefLivrableAttendu
    {
        return $this->briefLivrableAttendu;
    }

    public function setBriefLivrableAttendu(?BriefLivrableAttendu $briefLivrableAttendu): self
    {
        $this->briefLivrableAttendu = $briefLivrableAttendu;

        return $this;
    }

    

    
}
