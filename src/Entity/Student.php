<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    

    #[ORM\Id]
    #[ORM\Column]
    #[Assert\NotBlank(message:"NSC is required")]
    private ?int $nsc = null;

    
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Email is required")]
    #[Assert\Email(message:"The email '{{ value }}' is not a valid email ")]
     private ?string $email = null;

    

    public function getNsc(): ?int
    {
        return $this->nsc;
    }

    public function setNsc(int $nsc): self
    {
        $this->nsc = $nsc;

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
}
