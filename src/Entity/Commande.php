<?php

namespace App\Entity;

use DateTimeImmutable;
use App\Entity\Utilisateur;
use App\Entity\CommandeDetail;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use App\Repository\CommandeRepository;

use Doctrine\Common\Collections\Collection;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\HasLifecycleCallbacks]
#[ORM\Entity(repositoryClass: CommandeRepository::class)]
#[ApiResource]


class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $date_commande = null;

    

    #[ORM\ManyToOne(inversedBy: 'commandes', targetEntity: Utilisateur::class, cascade: ['persist'])]
    private ?utilisateur $utilisateur = null;

    #[ORM\OneToMany(mappedBy: 'com', targetEntity: CommandeDetail::class, cascade: ['persist'])]
    private Collection $commandeDetails;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_fact = null;

    #[ORM\Column(length: 255)]
    private ?string $commentaire = null;

    public function __construct()
    {
        $this->commandeDetails = new ArrayCollection();
        $this->date_commande= new  \DateTimeImmutable();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?\DateTimeImmutable
    {
        return $this->date_commande;
    }

    #[ORM\PrePersist]
    public function setDateCommande(): self
    {
        $this->date_commande = new \DateTimeImmutable();

        return $this;
    }

    

    public function getUtilisateur(): ?utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * @return Collection<int, CommandeDetail>
     */
    public function getCommandeDetails(): Collection
    {
        return $this->commandeDetails;
    }

    public function addCommandeDetail(CommandeDetail $commandeDetail): static
    {
        if (!$this->commandeDetails->contains($commandeDetail)) {
            $this->commandeDetails->add($commandeDetail);
            $commandeDetail->setCom($this);
        }

        return $this;
    }

    public function removeCommandeDetail(CommandeDetail $commandeDetail): static
    {
        if ($this->commandeDetails->removeElement($commandeDetail)) {
            // set the owning side to null (unless already changed)
            if ($commandeDetail->getCom() === $this) {
                $commandeDetail->setCom(null);
            }
        }

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getAdresseFact(): ?string
    {
        return $this->adresse_fact;
    }

    public function setAdresseFact(string $adresse_fact): static
    {
        $this->adresse_fact = $adresse_fact;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}
