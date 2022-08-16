<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\TeamRepository;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=TeamRepository::class)
 *  @Vich\Uploadable
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
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt;

        /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="team", fileNameProperty="imageName")
     * 
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\Column(type="text")
     */
    private $presentation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName2;

            /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="team", fileNameProperty="imageName2")
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
     * @Vich\UploadableField(mapping="team", fileNameProperty="imageName3")
     * 
     * @var File|null
     */
    private $imageFile3;

        /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt3;

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

                /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="team", fileNameProperty="imageName4")
     * 
     * @var File|null
     */
    private $imageFile4;

        /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedAt4;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @ORM\ManyToMany(targetEntity=Equipe::class, inversedBy="teams")
     */
    private $equipe;

    public function __construct()
    {
        $this->equipe = new ArrayCollection();
    }

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

    public function __toString()
    {
        return $this->titre;
    }

    public function setImageName4(?string $imageName4): self
    {
        $this->imageName4 = $imageName4;

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
     * @return Collection<int, Equipe>
     */
    public function getEquipe(): Collection
    {
        return $this->equipe;
    }

    public function addEquipe(Equipe $equipe): self
    {
        if (!$this->equipe->contains($equipe)) {
            $this->equipe[] = $equipe;
        }

        return $this;
    }

    public function removeEquipe(Equipe $equipe): self
    {
        $this->equipe->removeElement($equipe);

        return $this;
    }

    /**
     * Get nOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @return  File|null
     */ 
    public function getImageFile2()
    {
        return $this->imageFile2;
    }

    /**
     * Set nOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @param  File|null  $imageFile2  NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @return  self
     */ 
    public function setImageFile2($imageFile2)
    {
        $this->imageFile2 = $imageFile2;

        return $this;
    }

    /**
     * Get the value of updatedAt2
     */ 
    public function getUpdatedAt2()
    {
        return $this->updatedAt2;
    }

    /**
     * Set the value of updatedAt2
     *
     * @return  self
     */ 
    public function setUpdatedAt2($updatedAt2)
    {
        $this->updatedAt2 = $updatedAt2;

        return $this;
    }

    /**
     * Get nOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @return  File|null
     */ 
    public function getImageFile3()
    {
        return $this->imageFile3;
    }

    /**
     * Set nOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @param  File|null  $imageFile3  NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @return  self
     */ 
    public function setImageFile3($imageFile3)
    {
        $this->imageFile3 = $imageFile3;

        return $this;
    }

    /**
     * Get the value of updatedAt3
     */ 
    public function getUpdatedAt3()
    {
        return $this->updatedAt3;
    }

    /**
     * Set the value of updatedAt3
     *
     * @return  self
     */ 
    public function setUpdatedAt3($updatedAt3)
    {
        $this->updatedAt3 = $updatedAt3;

        return $this;
    }

    /**
     * Get nOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @return  File|null
     */ 
    public function getImageFile4()
    {
        return $this->imageFile4;
    }

    /**
     * Set nOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @param  File|null  $imageFile4  NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @return  self
     */ 
    public function setImageFile4($imageFile4)
    {
        $this->imageFile4 = $imageFile4;

        return $this;
    }

    /**
     * Get the value of updatedAt4
     */ 
    public function getUpdatedAt4()
    {
        return $this->updatedAt4;
    }

    /**
     * Set the value of updatedAt4
     *
     * @return  self
     */ 
    public function setUpdatedAt4($updatedAt4)
    {
        $this->updatedAt4 = $updatedAt4;

        return $this;
    }
}
