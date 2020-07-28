<?php

namespace App\Entity;

use App\Entity\Profil;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;




/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "apprenant" = "Apprenant", "formateur" = "Formateur"})
 * @ApiResource(
 *     attributes={"security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_FORMATEUR') ","pagination_items_per_page"=20,"normalization_context"={"groups"={"not_img"}}},
 *     collectionOperations={
 *         "post"={"security"="is_granted('ROLE_ADMIN')", "security_message"="Seul l'administrateur peut effectuer ceci!!!!","security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/users",},
 *         "get"={"security"="is_granted('ROLE_ADMIN')", "security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/users","normalization_context"={"groups"={"user_read","user_details_read"}}},
*           "get_apprenants"={
 *              "method"="GET",
 *              "path"="/apprenants" ,
 *              "access_control"="is_granted('ROLE_FORMATEUR')",
 *              "access_control_message"="Vous n'avez pas access à cette Ressource",
 *              "route_name"="apprenant_liste",
 *               
 *          },
 * 
 *          "get_formateurs"={
 *              "method"="GET",
 *              "path"="/formateurs" ,
 *              "access_control"="is_granted('ROLE_ADMIN')",
 *              "access_control_message"="Vous n'avez pas access à cette Ressource",
 *              "route_name"="formateur_liste",
 *               
 *          },
 * 
 *          "get_admins"={
 *              "method"="GET",
 *              "path"="/admins" ,
 *              "access_control"="is_granted('ROLE_ADMIN')",
 *              "access_control_message"="Vous n'avez pas access à cette Ressource",
 *              "route_name"="admin_liste",
 *               
 *          }
 * 
 *          
 * 
 * 
 * 
 *          
 * },
 *     
 *     itemOperations={
 *         "get"={"security"="is_granted('ROLE_ADMIN')",
 *               "security_message"="Seul l'administrateur peut effectuer ceci!!!!",
 *               "path"="admin/users/{id}",
 * }, 
 *         "delete"={"security"="is_granted('ROLE_ADMIN')",
 *              "security_message"="Seul l'administrateur peut effectuer ceci!!!!",
 *              "path"="admin/users/{id}",}
 * ,
 *         "patch"={"security"="is_granted('ROLE_ADMIN')","security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/users/{id}",},
 *         "put"={"security_post_denormalize"="is_granted('ROLE_ADMIN')","security_message"="Seul l'administrateur peut effectuer ceci!!!!","path"="admin/users/{id}",},
 *          "get_apprenant"=
 *            {
 *              "method"="GET",
 *              "path"="/apprenants/{id}",
 *              "requirements"={"id"="\d+"},
 *              "security"="(is_granted('ROLE_FORMATEUR'))",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 * 
 *          "get_formateur"=
 *            {
 *              "method"="GET",
 *              "path"="/formateurs/{id}",
 *              "requirements"={"id"="\d+"},
 *              "security"="(is_granted('ROLE_FORMATEUR'))",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 * 
 *          "get_admin"=
 *            {
 *              "method"="GET",
 *              "path"="/admins/{id}",
 *              "requirements"={"id"="\d+"},
 *              "security"="(is_granted('ROLE_FORMATEUR'))",
 *              "security_message"="Vous n'avez pas access à cette Ressource"
 *          },
 *     }
 * )
 
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"not_img"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * )
     * @Groups({"user_read","not_img"})
     */
    private $username;

   /* 
   * @Groups ({"user_details_read","not_img"}) 
   */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Groups({"not_img"})
     */
    private $password;

    /**
     * @ORM\Column(type="blob")
     * @Groups({"user_read"})
     */
    
    private $avatar;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user_read","not_img"})
     */
    private $prenom;

    /*
     * @ORM\Column(type="string", length=255)
     * @Groups({"user_read","not_img"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user_read","not_img"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user_read","not_img"})
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"user_read","not_img"})
     */
    private $profil;

    /**
     * @ORM\OneToMany(targetEntity=Promo::class, mappedBy="user", orphanRemoval=true)
     */
    private $promo;

    /**
     * @ORM\OneToMany(targetEntity=Groupecompetence::class, mappedBy="user", orphanRemoval=true)
     */
    private $groupecompetences;

    public function __construct()
    {
        $this->promo = new ArrayCollection();
        $this->groupecompetences = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_'.$this->profil->getLibelle();

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * @return Collection|Promo[]
     */
    public function getPromo(): Collection
    {
        return $this->promo;
    }

    public function addPromo(Promo $promo): self
    {
        if (!$this->promo->contains($promo)) {
            $this->promo[] = $promo;
            $promo->setUser($this);
        }

        return $this;
    }

    public function removePromo(Promo $promo): self
    {
        if ($this->promo->contains($promo)) {
            $this->promo->removeElement($promo);
            // set the owning side to null (unless already changed)
            if ($promo->getUser() === $this) {
                $promo->setUser(null);
            }
        }

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
            $groupecompetence->setUser($this);
        }

        return $this;
    }

    public function removeGroupecompetence(Groupecompetence $groupecompetence): self
    {
        if ($this->groupecompetences->contains($groupecompetence)) {
            $this->groupecompetences->removeElement($groupecompetence);
            // set the owning side to null (unless already changed)
            if ($groupecompetence->getUser() === $this) {
                $groupecompetence->setUser(null);
            }
        }

        return $this;
    }

    
}