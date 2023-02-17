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
    #[Assert\NotBlank(message:" remplir ce champ")]
    private ?string $libelle = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:" remplir ce champ")]
    private ?string $type = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:" remplir ce champ")]
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
