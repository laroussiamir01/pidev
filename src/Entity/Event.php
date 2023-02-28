<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ORM\Table(name: 'event')]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:" entrer le NOM de l'evenement" )] 
    #[Assert\Length(min:3 , minMessage : "Le nom doit contenir au moins {{ limit }} caractères")]
    #[Assert\Regex(
        pattern:"/^[a-zA-Z]+$/i",
        message:"Nom dois etre des lettres"
        )]
   
    private ?string $nom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"date is required")]
    #[Assert\GreaterThanOrEqual("today", message: "Veuillez saisir une date supérieure à la date d'aujourd'hui ")]
    private ?\DateTimeInterface $DateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"date fin name is required")]
    #[Assert\GreaterThanOrEqual(propertyPath:"DateDebut", message: "Veuillez saisir une date supérieure à la date debut ")]
    private ?\DateTimeInterface $DateFin = null;

    #[ORM\OneToMany(mappedBy: 'Events', targetEntity: Don::class, orphanRemoval:true)]
    private Collection $dons;

    public function __construct()
    {
        $this->dons = new ArrayCollection();
    }

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

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->DateDebut;
    }

    public function setDateDebut(\DateTimeInterface $DateDebut): self
    {
        $this->DateDebut = $DateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->DateFin;
    }

    public function setDateFin(\DateTimeInterface $DateFin): self
    {
        $this->DateFin = $DateFin;

        return $this;
    }

    /**
     * @return Collection<int, Don>
     */
    public function getDons(): Collection
    {
        return $this->dons;
    }

    public function addDon(Don $don): self
    {
        if (!$this->dons->contains($don)) {
            $this->dons->add($don);
            $don->setEvents($this);
        }

        return $this;
    }

    public function removeDon(Don $don): self
    {
        if ($this->dons->removeElement($don)) {
            // set the owning side to null (unless already changed)
            if ($don->getEvents() === $this) {
                $don->setEvents(null);
            }
        }

        return $this;
    }
}
