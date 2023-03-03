<?php

namespace App\Entity;

use App\Repository\LaboRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: LaboRepository::class)]
class Labo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Donner le Nom du Labo")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le bloc est obligatoire")]
    #[Assert\Length(min:1,max:1,minMessage:" Bloc n'exist pas ",maxMessage:" Bloc n'exist pas ")]

    private ?string $bloc = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"E-mail est obligatoire")]
    #[Assert\Email(message:"E-mail est obligatoire")]

    private ?string $mail = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Numero de telephone est obligatoire")]
    #[Assert\Length(max:8,min:8,maxMessage:"Numero indisponible",minMessage:"Numero indisponible")]
    #[Assert\Positive(message:"Erreur num negatif")]

    private ?int $tel = null;

    #[ORM\Column(length: 255)]
    //insertion imageee formulaire
    private ?string $img = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le nom de medecin-chef est obligatoire")]
    #[Assert\Length(min:10,max:100,minMessage:"Nom NON valide ",maxMessage:"Nom NON valide")]

    private ?string $med = null;

    #[ORM\OneToMany(mappedBy: 'laboo', targetEntity: Analyse::class)]
    private Collection $analyses;

    public function __construct()
    {
        $this->analyses = new ArrayCollection();
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

    public function getBloc(): ?string
    {
        return $this->bloc;
    }

    public function setBloc(string $bloc): self
    {
        $this->bloc = $bloc;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getMed(): ?string
    {
        return $this->med;
    }

    public function setMed(string $med): self
    {
        $this->med = $med;

        return $this;
    }

    /**
     * @return Collection<int, Analyse>
     */
    public function getAnalyses(): Collection
    {
        return $this->analyses;
    }

    public function addAnalysis(Analyse $analysis): self
    {
        if (!$this->analyses->contains($analysis)) {
            $this->analyses->add($analysis);
            $analysis->setLaboo($this);
        }

        return $this;
    }
   
    public function removeAnalysis(Analyse $analysis): self
    {
        if ($this->analyses->removeElement($analysis)) {
            // set the owning side to null (unless already changed)
            if ($analysis->getLaboo() === $this) {
                $analysis->setLaboo(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->nom;
    }
}
