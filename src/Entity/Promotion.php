<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionRepository::class)]
class Promotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom_de_promotion = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_de_debut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_de_fin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $formation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDePromotion(): ?string
    {
        return $this->nom_de_promotion;
    }

    public function setNomDePromotion(?string $nom_de_promotion): static
    {
        $this->nom_de_promotion = $nom_de_promotion;

        return $this;
    }

    public function getDateDeDebut(): ?\DateTimeInterface
    {
        return $this->date_de_debut;
    }

    public function setDateDeDebut(?\DateTimeInterface $date_de_debut): static
    {
        $this->date_de_debut = $date_de_debut;

        return $this;
    }

    public function getDateDeFin(): ?\DateTimeInterface
    {
        return $this->date_de_fin;
    }

    public function setDateDeFin(?\DateTimeInterface $date_de_fin): static
    {
        $this->date_de_fin = $date_de_fin;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->formation;
    }

    public function setFormation(?string $formation): static
    {
        $this->formation = $formation;

        return $this;
    }
}
