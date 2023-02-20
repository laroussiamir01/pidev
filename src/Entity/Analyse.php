<?php

namespace App\Entity;

use App\Repository\AnalyseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AnalyseRepository::class)]
#[ORM\AttributeOverrides]
class Analyse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"la date d'analyse est obligatoire")]
    #[Assert\Date(message:"date doit etre : YYYY-MM-DD ")]

    private ?string $date = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Resultat d'analyse est obligatoire")]
    #[Assert\Length(min:10,minMessage:"resultat non valide")]

    private ?string $resultat = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"image de resultat est obligatoire")]
    //insertion image
    private ?string $image = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"donner prix d'analyse !! ")]
    #[Assert\Positive(message:"prix doit etre positif")]

    private ?float $prix = null;

    #[ORM\ManyToOne(inversedBy: 'analyses')]
    private ?Labo $labo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getResultat(): ?string
    {
        return $this->resultat;
    }

    public function setResultat(string $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getLabo(): ?Labo
    {
        return $this->labo;
    }

    public function setLabo(?Labo $labo): self
    {
        $this->labo = $labo;

        return $this;
    }
}
