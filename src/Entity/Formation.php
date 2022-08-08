<?php

namespace App\Entity;

use App\Entity\Cours;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormationRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=FormationRepository::class)
 * @Vich\Uploadable
 */
class Formation
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
     * @Vich\UploadableField(mapping="formation", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile;


    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texte1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName2;
        /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="formation", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile2;

        /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName3;

        /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="formation", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile3;
        /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName4;

        /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="formation", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile4;
        /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName5;

        /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="formation", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile5;
        /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName6;

        /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="formation", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile6;
        /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName7;


        /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="formation", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile7;
        /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName8;

        /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="formation", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile8;
        /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt8;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texte2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName9;

        /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="formation", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile9;
        /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $theme;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $formation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texte3;

    /**
     * @ORM\ManyToMany(targetEntity=Cours::class, mappedBy="formations")
     */
    private $cours;

    public function __construct()
    {
        $this->cours = new ArrayCollection();
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

    public function getTexte1(): ?string
    {
        return $this->texte1;
    }

    public function setTexte1(?string $texte1): self
    {
        $this->texte1 = $texte1;

        return $this;
    }

    public function getImageName2(): ?string
    {
        return $this->imageName2;
    }

    public function setImageName2(?string $imageName2): self
    {
        $this->imageName2 = $imageName2;

        return $this;
    }

    public function getImageName3(): ?string
    {
        return $this->imageName3;
    }

    public function setImageName3(?string $imageName3): self
    {
        $this->imageName3 = $imageName3;

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

    public function getImageName5(): ?string
    {
        return $this->imageName5;
    }

    public function setImageName5(?string $imageName5): self
    {
        $this->imageName5 = $imageName5;

        return $this;
    }

    public function getImageName6(): ?string
    {
        return $this->imageName6;
    }

    public function setImageName6(?string $imageName6): self
    {
        $this->imageName6 = $imageName6;

        return $this;
    }

    public function getImageName7(): ?string
    {
        return $this->imageName7;
    }

    public function setImageName7(?string $imageName7): self
    {
        $this->imageName7 = $imageName7;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getImageName8(): ?string
    {
        return $this->imageName8;
    }

    public function setImageName8(?string $imageName8): self
    {
        $this->imageName8 = $imageName8;

        return $this;
    }

    public function getTexte2(): ?string
    {
        return $this->texte2;
    }

    public function setTexte2(?string $texte2): self
    {
        $this->texte2 = $texte2;

        return $this;
    }

    public function getTitre2(): ?string
    {
        return $this->titre2;
    }

    public function setTitre2(?string $titre2): self
    {
        $this->titre2 = $titre2;

        return $this;
    }

    public function getImageName9(): ?string
    {
        return $this->imageName9;
    }

    public function setImageName9(?string $imageName9): self
    {
        $this->imageName9 = $imageName9;

        return $this;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->formation;
    }

    public function setFormation(?string $formation): self
    {
        $this->formation = $formation;

        return $this;
    }

    public function getTexte3(): ?string
    {
        return $this->texte3;
    }

    public function setTexte3(?string $texte3): self
    {
        $this->texte3 = $texte3;

        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile2(): ?File
    {
        return $this->imageFile2;
    }

    public function setImageFile2(?File $imageFile2 = null): void
    {
        $this->imageFile2 = $imageFile2;

        if (null !== $imageFile2) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt2 = new \DateTimeImmutable();
        }
    }

    public function getUpdatedAt2(): ?\DateTimeImmutable
    {
        return $this->updatedAt2;
    }

    public function setUpdatedAt2(?\DateTimeImmutable $updatedAt2): self
    {
        $this->updatedAt2 = $updatedAt2;

        return $this;
    }

    public function getImageFile3(): ?File
    {
        return $this->imageFile3;
    }

    public function setImageFile3(?File $imageFile3 = null): void
    {
        $this->imageFile3 = $imageFile3;

        if (null !== $imageFile3) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt3 = new \DateTimeImmutable();
        }
    }
    public function getUpdatedAt3(): ?\DateTimeImmutable
    {
        return $this->updatedAt3;
    }

    public function setUpdatedAt3(?\DateTimeImmutable $updatedAt3): self
    {
        $this->updatedAt3 = $updatedAt3;

        return $this;
    }

    public function getImageFile4(): ?File
    {
        return $this->imageFile4;
    }

    public function setImageFile4(?File $imageFile4 = null): void
    {
        $this->imageFile4 = $imageFile4;

        if (null !== $imageFile4) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt4 = new \DateTimeImmutable();
        }
    }
    public function getUpdatedAt4(): ?\DateTimeImmutable
    {
        return $this->updatedAt4;
    }

    public function setUpdatedAt4(?\DateTimeImmutable $updatedAt4): self
    {
        $this->updatedAt4 = $updatedAt4;

        return $this;
    }

    public function getImageFile5(): ?File
    {
        return $this->imageFile5;
    }

    public function setImageFile5(?File $imageFile5 = null): void
    {
        $this->imageFile5 = $imageFile5;

        if (null !== $imageFile5) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt5 = new \DateTimeImmutable();
        }
    }
    public function getUpdatedAt5(): ?\DateTimeImmutable
    {
        return $this->updatedAt5;
    }

    public function setUpdatedAt5(?\DateTimeImmutable $updatedAt5): self
    {
        $this->updatedAt5 = $updatedAt5;

        return $this;
    }

    public function getImageFile6(): ?File
    {
        return $this->imageFile6;
    }

    public function setImageFile6(?File $imageFile6 = null): void
    {
        $this->imageFile6 = $imageFile6;

        if (null !== $imageFile6) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt6 = new \DateTimeImmutable();
        }
    }
    public function getUpdatedAt6(): ?\DateTimeImmutable
    {
        return $this->updatedAt6;
    }

    public function setUpdatedAt6(?\DateTimeImmutable $updatedAt6): self
    {
        $this->updatedAt6 = $updatedAt6;

        return $this;
    }

    public function getImageFile7(): ?File
    {
        return $this->imageFile7;
    }

    public function setImageFile7(?File $imageFile7 = null): void
    {
        $this->imageFile7 = $imageFile7;

        if (null !== $imageFile7) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt7 = new \DateTimeImmutable();
        }
    }
    public function getUpdatedAt7(): ?\DateTimeImmutable
    {
        return $this->updatedAt7;
    }

    public function setUpdatedAt7(?\DateTimeImmutable $updatedAt7): self
    {
        $this->updatedAt7 = $updatedAt7;

        return $this;
    }

    public function getImageFile8(): ?File
    {
        return $this->imageFile8;
    }

    public function setImageFile8(?File $imageFile8 = null): void
    {
        $this->imageFile8 = $imageFile8;

        if (null !== $imageFile8) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt8 = new \DateTimeImmutable();
        }
    }
    public function getUpdatedAt8(): ?\DateTimeImmutable
    {
        return $this->updatedAt8;
    }

    public function setUpdatedAt8(?\DateTimeImmutable $updatedAt8): self
    {
        $this->updatedAt8 = $updatedAt8;

        return $this;
    }

    public function getImageFile9(): ?File
    {
        return $this->imageFile9;
    }

    public function setImageFile9(?File $imageFile9 = null): void
    {
        $this->imageFile9 = $imageFile9;

        if (null !== $imageFile9) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt9 = new \DateTimeImmutable();
        }
    }
    public function getUpdatedAt9(): ?\DateTimeImmutable
    {
        return $this->updatedAt9;
    }

    public function setUpdatedAt9(?\DateTimeImmutable $updatedAt9): self
    {
        $this->updatedAt9 = $updatedAt9;

        return $this;
    }
    public function __toString()
    {
        return $this->theme;
    }

    /**
     * @return Collection<int, Cours>
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): self
    {
        if (!$this->cours->contains($cour)) {
            $this->cours[] = $cour;
            $cour->addFormation($this);
        }

        return $this;
    }

    public function removeCour(Cours $cour): self
    {
        if ($this->cours->removeElement($cour)) {
            $cour->removeFormation($this);
        }

        return $this;
    }


}
