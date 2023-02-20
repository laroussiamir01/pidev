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
    
    private ?int $id_mat = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:" veuillez ecrire la libelle")]
    #[ Assert\Length([
        'min' => 3,
        'max' => 20,
        'minMessage' => 'La libelle doit comporter au moins {{ limit }} caractères  ',
        'maxMessage' => 'La libelle doit comporter au plus {{ limit }} caractères '
    ])]
        private ?string $libelle = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:" veuillez ecrire le type")]
    #[ Assert\Length([
        'min' => 3,
        'max' => 20,
        'minMessage' => 'Le type doit comporter au moins {{ limit }} caractères  ',
        'maxMessage' => 'Le type doit comporter au plus {{ limit }} caractères '
    ])]
    private ?string $type = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"veuillez ecrire le prix")]
    #[ Assert\GreaterThan(0)]
   
    private ?float $prix_achat = null;

    public function getId_mat(): ?int
    {
        return $this->id_mat;
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

    public function getPrixAchat(): ?float
    {
        return $this->prix_achat;
    }

    public function setPrixAchat(float $prix_achat): self
    {
        $this->prix_achat = $prix_achat;

        return $this;
    }
}
