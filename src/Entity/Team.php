<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\TeamRepository;

/**
 * @ORM\Entity(repositoryClass=TeamRepository::class)
 */
class Team
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageName;

    /**
     * @ORM\Column(type="text")
     */
    private $presentation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageName2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageName3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $poste;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTimeInterface|null
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre3;

    /**
     * @ORM\Column(type="text")
     */
    private $presentation2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getImageName2(): ?string
    {
        return $this->imageName2;
    }

    public function setImageName2(string $imageName2): self
    {
        $this->imageName2 = $imageName2;

        return $this;
    }

    public function getImageName3(): ?string
    {
        return $this->imageName3;
    }

    public function setImageName3(string $imageName3): self
    {
        $this->imageName3 = $imageName3;

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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTitre2(): ?string
    {
        return $this->titre2;
    }

    public function setTitre2(string $titre2): self
    {
        $this->titre2 = $titre2;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }



    public function getTitre3(): ?string
    {
        return $this->titre3;
    }

    public function setTitre3(string $titre3): self
    {
        $this->titre3 = $titre3;

        return $this;
    }

    public function getPresentation2(): ?string
    {
        return $this->presentation2;
    }

    public function setPresentation2(string $presentation2): self
    {
        $this->presentation2 = $presentation2;

        return $this;
    }

    public function getImageName4(): ?string
    {
        return $this->imageName4;
    }

    public function setImageName4(?string $imageName4): self
    {
        $this->imageName4 = $imageName4;

        return $this;
    }

    /**
     * Get the value of updatedAt
     *
     * @return  DateTimeInterface|null
     */ 
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @param  DateTimeInterface|null  $updatedAt
     *
     * @return  self
     */ 
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
