<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $produit;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $fournisseur;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $conditionnement;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $pahtunit;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $pahtkg;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $pattcunit;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $pattckg;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $grammes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getFournisseur(): ?string
    {
        return $this->fournisseur;
    }

    public function setFournisseur(string $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getConditionnement(): ?string
    {
        return $this->conditionnement;
    }

    public function setConditionnement(string $conditionnement): self
    {
        $this->conditionnement = $conditionnement;

        return $this;
    }

    public function getPahtunit(): ?string
    {
        return $this->pahtunit;
    }

    public function setPahtunit(string $pahtunit): self
    {
        $this->pahtunit = $pahtunit;

        return $this;
    }

    public function getPahtkg(): ?string
    {
        return $this->pahtkg;
    }

    public function setPahtkg(string $pahtkg): self
    {
        $this->pahtkg = $pahtkg;

        return $this;
    }

    public function getPattcunit(): ?string
    {
        return $this->pattcunit;
    }

    public function setPattcunit(string $pattcunit): self
    {
        $this->pattcunit = $pattcunit;

        return $this;
    }

    public function getPattckg(): ?string
    {
        return $this->pattckg;
    }

    public function setPattckg(string $pattckg): self
    {
        $this->pattckg = $pattckg;

        return $this;
    }

    public function getGrammes(): ?int
    {
        return $this->grammes;
    }

    public function setGrammes(?int $grammes): self
    {
        $this->grammes = $grammes;

        return $this;
    }
}
