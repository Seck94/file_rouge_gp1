<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\LivrableRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;




/**
 * /**
* @ApiResource(
 * attributes={
 *          "pagination_items_per_page"=10,
 *          "normalization_context"={"groups"={"Grptags_read","Grptags_tags_read"},"enable_max_depth"=true}
 *      },
 *     collectionOperations={
 *          
 *         "get"={
 *              "security"="is_granted('ROLE_CM')", 
 *              "security_message"="Vous n'avez pas acces a cette ressource.",
 *              
 *               
 *              },
 *              "add_livrable"=
 *              {
 *              "method"="POST",
 *              "security_post_denormalize"="is_granted('EDIT', object)", 
 *              "security_post_denormalize_message"="Vous n'avez pas ce privilege.",
 *              "path"="apprenants/{idapp}/groupe/{idgrp}/livrables",
 *              "defaults"={"id"=null}
 *               },
 *              
 *              
 *     },
 *     
 *     itemOperations={
 *         "get"={
 *              "security"="is_granted('ROLE_FORMATEUR')", 
 *              "security_message"="Vous n'avez pas ce privilege.",
 *              "path"="formateur/briefs/{id}",
 *         }, 
 * 
 *     },
 * )
 * 
 * )

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
     * @ORM\ManyToOne(targetEntity=LivrableAttendu::class, inversedBy="livrables")
     * @ORM\JoinColumn(nullable=false)
     */

    private $livrableattendu;
    

    


    public function __construct()
    {
        $this->livrableAttendu = new ArrayCollection();
        $this->brieflivrableattendu = new ArrayCollection();
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

   public function getLivrableAttendu(): ?LivrableAttendu

   {
    return $this->livrableattendu;
   }

    
   public function setLivrableAttendu(?LivrableAttendu $livrableAttendu): self
   {
       $this->livrableattendu = $livrableAttendu;

       return $this;
   }

    
}
