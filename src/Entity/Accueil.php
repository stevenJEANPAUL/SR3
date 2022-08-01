<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use App\Repository\AccueilRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass=AccueilRepository::class)
 *  @Vich\Uploadable
 */
class Accueil
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="accueil", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile;

        /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texte;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @ORM\ManyToMany(targetEntity=Carousel::class, inversedBy="accueils")
     */
    private $carousels;

    /**
     * @ORM\ManyToMany(targetEntity=AvisClient::class, inversedBy="accueils")
     */
    private $avisClients;

    public function __construct()
    {
        $this->carousels = new ArrayCollection();
        $this->avisClients = new ArrayCollection();
    }

    public function __toString()
    {
    return $this->titre;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(?string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return Collection<int, Carousel>
     */
    public function getCarousels(): Collection
    {
        return $this->carousels;
    }

    public function addCarousel(Carousel $carousel): self
    {
        if (!$this->carousels->contains($carousel)) {
            $this->carousels[] = $carousel;
        }

        return $this;
    }

    public function removeCarousel(Carousel $carousel): self
    {
        $this->carousels->removeElement($carousel);

        return $this;
    }

    /**
     * @return Collection<int, AvisClient>
     */
    public function getAvisClients(): Collection
    {
        return $this->avisClients;
    }

    public function addAvisClient(AvisClient $avisClient): self
    {
        if (!$this->avisClients->contains($avisClient)) {
            $this->avisClients[] = $avisClient;
        }

        return $this;
    }

    public function removeAvisClient(AvisClient $avisClient): self
    {
        $this->avisClients->removeElement($avisClient);

        return $this;
    }
}
