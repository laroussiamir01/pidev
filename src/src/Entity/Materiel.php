<?php

namespace App\Entity;

use App\Repository\MaterielRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MaterielRepository::class)]
class Materiel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:" veuillez ecrire la libelle")]
    #[ Assert\Length([
        'min' => 3,
        'max' => 30,
        'minMessage' => 'La libelle doit comporter au moins {{ limit }} caractères  ',
        'maxMessage' => 'La libelle doit comporter au plus {{ limit }} caractères '
    ])]
    private ?string $libelle = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:" veuillez ecrire le type")]
    #[ Assert\Length([
        'min' => 3,
        'max' => 30,
        'minMessage' => 'Le type doit comporter au moins {{ limit }} caractères  ',
        'maxMessage' => 'Le type doit comporter au plus {{ limit }} caractères '
    ])]
    private ?string $type = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"veuillez ecrire le prix")]
    #[ Assert\GreaterThan(0)]
    private ?int $prix = null;

    #[ORM\ManyToOne(inversedBy: 'Materiels')]
    private ?Fournisseur $fournisseur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }
}
