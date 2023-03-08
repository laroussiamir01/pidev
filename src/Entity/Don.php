<?php

namespace App\Entity;

use App\Repository\DonRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: DonRepository::class)]
class Don
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:" entrer le NOM du don " )] 
    #[Assert\Length(min:3 , minMessage : "Le nom doit contenir au moins {{ limit }} caractères")]
    #[Assert\Regex(
        pattern:"/^[a-zA-Z]+$/i",
        message:"Nom dois etre des lettres"
        )]
   
    private ?string $nom = null;

    #[ORM\ManyToOne(inversedBy: 'dons')]
    private ?Event $Events = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:" entrer le montant " )] 

    #[Assert\GreaterThanOrEqual(0, message: "le montant doit etre positif ")]

    private ?float $montant = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEvents(): ?Event
    {
        return $this->Events;
    }

    public function setEvents(?Event $Events): self
    {
        $this->Events = $Events;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    
  
}
