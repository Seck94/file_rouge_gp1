<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProfilRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ApiResource(
 *     attributes={"security"="is_granted('ROLE_ADMIN')","pagination_items_per_page"=10},
 *     collectionOperations={
 *         "post"={"security"="is_granted('ROLE_ADMIN')", "security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/profils"},
 *         "get"={"security"="is_granted('ROLE_ADMIN')", "security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/profils",},
 *          
 *     },
 *     
 *     itemOperations={
 *         "get"={"security"="is_granted('ROLE_ADMIN')", "security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/profils/{id}",}, 
 *         "delete"={"security"="is_granted('ROLE_ADMIN')","security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/profils/{id}",},
 *         "patch"={"security"="is_granted('ROLE_ADMIN')", "security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/profils/{id}",},
 *         "put"={"security_post_denormalize"="is_granted('ROLE_ADMIN')","security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/profils/{id}",},
 *     }
 * )
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 */
class Profil
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
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="profil", orphanRemoval=true)
     *  @ApiSubresource
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
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
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setProfil($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getProfil() === $this) {
                $user->setProfil(null);
            }
        }

        return $this;
    }
}
