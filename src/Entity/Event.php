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
   // #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"Id is required")]
    private ?int $id_event = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"name is required")]
    private ?string $Nom_event = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"date is required")]
    private ?\DateTimeInterface $Date_d_event = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"date fin name is required")]
    private ?\DateTimeInterface $Date_f_event = null;

    #[ORM\OneToMany(mappedBy: 'Events', targetEntity: Dons::class, orphanRemoval: true)]
    private Collection $dons;

    public function __construct()
    {
        $this->dons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id_event;
    }

    public function setId(int $id_event): self
    {
        $this->id_event = $id_event;

        return $this;
    }

    public function getNomEvent(): ?string
    {
        return $this->Nom_event;
    }

    public function setNomEvent(string $Nom_event): self
    {
        $this->Nom_event = $Nom_event;

        return $this;
    }

    public function getDateDEvent(): ?\DateTimeInterface
    {
        return $this->Date_d_event;
    }

    public function setDateDEvent(\DateTimeInterface $Date_d_event): self
    {
        $this->Date_d_event = $Date_d_event;

        return $this;
    }

    public function getDateFEvent(): ?\DateTimeInterface
    {
        return $this->Date_f_event;
    }

    public function setDateFEvent(\DateTimeInterface $Date_f_event): self
    {
        $this->Date_f_event = $Date_f_event;

        return $this;
    }

    /**
     * @return Collection<int, Dons>
     */
    public function getDons(): Collection
    {
        return $this->dons;
    }

    public function addDon(Dons $don): self
    {
        if (!$this->dons->contains($don)) {
            $this->dons->add($don);
            $don->setEvents($this);
        }

        return $this;
    }

    public function removeDon(Dons $don): self
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
