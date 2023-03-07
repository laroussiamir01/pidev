<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message:"Email is required")]
    #[Assert\Email(message:"The email '{{ value }}' is not a valid email ")]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Entrer votre Nom")]
    #[Assert\Length(min:3 , minMessage : "Le nom doit contenir au moins {{ limit }} caractères")]
    #[Assert\Regex(
        pattern:"/^[a-zA-Z]+$/i",
        message:"Nom dois etre des lettres"
        )] 
    private ?string $Nom_user = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Entrer votre Prenom")]
    #[Assert\Length(min:3 , minMessage : "Le nom doit contenir au moins {{ limit }} caractères")]
    #[Assert\Regex(
        pattern:"/^[a-zA-Z]+$/i",
        message:"Nom dois etre des lettres"
        )] 
    private ?string $Prenom_user = null;


    

    #[ORM\OneToMany(mappedBy: 'users', targetEntity: Reclamation::class, orphanRemoval: true)]
    
    private Collection $reclamations;

    #[ORM\Column]
    private ?bool $isBlocked = false;

    

    public function __construct()
    {
        $this->reclamations = new ArrayCollection();
    }
   
    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

  
    public function getNomUser(): ?string
    {
        return $this->Nom_user;
    }

    public function setNomUser(string $Nom_user): self
    {
        $this->Nom_user = $Nom_user;

        return $this;
    }

    public function getPrenomUser(): ?string
    {
        return $this->Prenom_user;
    }

    public function setPrenomUser(string $Prenom_user): self
    {
        $this->Prenom_user = $Prenom_user;

        return $this;
    }

    /**
     * @return Collection<int, Reclamation>
     */
    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): self
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations->add($reclamation);
            $reclamation->setUsers($this);
        }

        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): self
    {
        if ($this->reclamations->removeElement($reclamation)) {
            // set the owning side to null (unless already changed)
            if ($reclamation->getUsers() === $this) {
                $reclamation->setUsers(null);
            }
        }

        return $this;
    }

    /* public function __toString()
    {
        return $this->email;
    } */

    public function isIsBlocked(): ?bool
    {
        return $this->isBlocked;
    }

    public function setIsBlocked(bool $isBlocked): self
    {
        $this->isBlocked = $isBlocked;

        return $this;
    }

    
}
