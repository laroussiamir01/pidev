<?php

namespace App\Entity;
use App\Entity\Materiel;
use App\Repository\FournisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"veuillez ecrire le nom")]
    #[ Assert\Length([
        'min' => 3,
        'max' => 10,
        'minMessage' => 'Le nom de fournisseur doit comporter au moins {{ limit }} caractères  ',
        'maxMessage' => 'Le nom de fournisseur doit comporter au plus {{ limit }} caractères '
    ])]
   
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'Fournisseur', targetEntity: Materiel::class)]
    private Collection $Materiels;

    public function __construct()
    {
        $this->Materiels = new ArrayCollection();
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

    /**
     * @return Collection<int, Materiel>
     */
    public function getMateriels(): Collection
    {
        return $this->Materiels;
    }

    public function addMateriel(Materiel $materiel): self
    {
        if (!$this->Materiels->contains($materiel)) {
            $this->Materiels->add($materiel);
            $materiel->setFournisseur($this);
        }

        return $this;
    }

    public function removeMateriel(Materiel $materiel): self
    {
        if ($this->Materiels->removeElement($materiel)) {
            // set the owning side to null (unless already changed)
            if ($materiel->getFournisseur() === $this) {
                $materiel->setFournisseur(null);
            }
        }

        return $this;
    }
}
