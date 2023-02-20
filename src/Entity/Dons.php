<?php

namespace App\Entity;

use App\Repository\DonsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DonsRepository::class)]
class Dons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_don = null;

    #[ORM\ManyToOne(inversedBy: 'dons')]
    private ?Categorie $cat = null;

    #[ORM\ManyToOne(inversedBy: 'Dons')]
    private ?Etats $etats = null;

    #[ORM\ManyToOne(inversedBy: 'dons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Event $Events = null;


    public function getId(): ?int
    {
        return $this->id_don;
    }
    public function setId(int $id_don): self
    {
        $this->id_don = $id_don;

        return $this;
    }

    public function getCat(): ?Categorie
    {
        return $this->cat;
    }

    public function setCat(?Categorie $cat): self
    {
        $this->cat = $cat;

        return $this;
    }

    public function getEtats(): ?Etats
    {
        return $this->etats;
    }

    public function setEtats(?Etats $etats): self
    {
        $this->etats = $etats;

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

   

   

  
}
