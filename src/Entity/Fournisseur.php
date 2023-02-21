<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_f = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"veuillez ecrire le nom")]
    #[ Assert\Length([
        'min' => 3,
        'max' => 10,
        'minMessage' => 'Le nom de fournisseur doit comporter au moins {{ limit }} caractères  ',
        'maxMessage' => 'Le nom de fournisseur doit comporter au plus {{ limit }} caractères '
    ])]
   

    private ?string $nom_f = null;

    public function getId_f(): ?int
    {
        return $this->id_f;
    }

    public function getNomF(): ?string
    {
        return $this->nom_f;
    }

    public function setNomF(string $nom_f): self
    {
        $this->nom_f = $nom_f;

        return $this;
    }
}
