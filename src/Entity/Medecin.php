<?php

namespace App\Entity;

use App\Repository\MedecinRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Mime\Message;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MedecinRepository::class)]
class Medecin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    
    #[Assert\NotBlank(message:"le nom est obligatoire")]
    private ?string $nom_med = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom_med = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"le prenom est obligatoire")]
    #[Assert\Positive(message:"le num doit etre positif")]
    #[Assert\Length(max:8,maxMessage:"le numéro de téléphone doit contenir 8 caractères.")] 
    private ?int $tel_med = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le mail est obligatoire")]
    #[Assert\Email(message:"mail invalide")]
    private ?string $mail_med = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"la specialite est obligatoire")]
    private ?string $specialite = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le diplome est obligatoire")]
    private ?string $diplome = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMed(): ?string
    {
        return $this->nom_med;
    }

    public function setNomMed(string $nom_med): self
    {
        $this->nom_med = $nom_med;

        return $this;
    }

    public function getPrenomMed(): ?string
    {
        return $this->prenom_med;
    }

    public function setPrenomMed(string $prenom_med): self
    {
        $this->prenom_med = $prenom_med;

        return $this;
    }

    public function getTelMed(): ?int
    {
        return $this->tel_med;
    }

    public function setTelMed(int $tel_med): self
    {
        $this->tel_med = $tel_med;

        return $this;
    }

    public function getMailMed(): ?string
    {
        return $this->mail_med;
    }

    public function setMailMed(string $mail_med): self
    {
        $this->mail_med = $mail_med;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getDiplome(): ?string
    {
        return $this->diplome;
    }

    public function setDiplome(string $diplome): self
    {
        $this->diplome = $diplome;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }
}
