<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
   // #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"Id is required")]
    private ?int $id_user = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"first name is required")]
    private ?string $Nom_user = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"last name is required")]
    private ?string $Prenom_user = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Email is required")]
    #[Assert\Email(message:"The email '{{ value }}' is not a valid email ")]
    private ?string $Email_user = null;

    public function getId(): ?int
    {
        return $this->id_user;
    }

    public function setId(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
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

    public function getEmailUser(): ?string
    {
        return $this->Email_user;
    }

    public function setEmailUser(string $Email_user): self
    {
        $this->Email_user = $Email_user;

        return $this;
    }
}
