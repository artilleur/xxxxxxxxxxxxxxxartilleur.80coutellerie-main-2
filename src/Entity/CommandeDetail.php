<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CommandeDetailRepository;

#[ORM\Entity(repositoryClass: CommandeDetailRepository::class)]
#[ApiResource]
class CommandeDetail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $reduction = null;

    #[ORM\ManyToOne(inversedBy: 'commandeDetails', targetEntity: Commande::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?commande $com = null;

    #[ORM\ManyToOne(inversedBy: 'commandeDetails', targetEntity: Produit::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?produit $pro = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getReduction(): ?string
    {
        return $this->reduction;
    }

    public function setReduction(string $reduction): static
    {
        $this->reduction = $reduction;

        return $this;
    }

    public function getCom(): ?commande
    {
        return $this->com;
    }

    public function setCom(?commande $com): static
    {
        $this->com = $com;

        return $this;
    }

    public function getPro(): ?produit
    {
        return $this->pro;
    }

    public function setPro(?produit $pro): static
    {
        $this->pro = $pro;

        return $this;
    }
}
