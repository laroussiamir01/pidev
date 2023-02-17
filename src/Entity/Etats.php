<?php

namespace App\Entity;

use App\Repository\EtatsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtatsRepository::class)]
class Etats
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom_etat = null;

    #[ORM\OneToMany(mappedBy: 'etats', targetEntity: Dons::class)]
    private Collection $Dons;

    public function __construct()
    {
        $this->Dons = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEtat(): ?string
    {
        return $this->Nom_etat;
    }

    public function setNomEtat(string $Nom_etat): self
    {
        $this->Nom_etat = $Nom_etat;

        return $this;
    }

    /**
     * @return Collection<int, Dons>
     */
    public function getDons(): Collection
    {
        return $this->Dons;
    }

    public function addDon(Dons $don): self
    {
        if (!$this->Dons->contains($don)) {
            $this->Dons->add($don);
            $don->setEtats($this);
        }

        return $this;
    }

    public function removeDon(Dons $don): self
    {
        if ($this->Dons->removeElement($don)) {
            // set the owning side to null (unless already changed)
            if ($don->getEtats() === $this) {
                $don->setEtats(null);
            }
        }

        return $this;
    }


}
