<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallerie
 *
 * @ORM\Table(name="gallerie")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\GallerieRepository")
 */
class Gallerie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="carousel", type="boolean", nullable=true)
     */
    private $carousel;
    /**
     * @var bool
     *
     * @ORM\Column(name="photo", type="boolean", nullable=true)
     */
    private $photo;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Gallerie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Gallerie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Gallerie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set carousel
     *
     * @param boolean $carousel
     *
     * @return Gallerie
     */
    public function setCarousel($carousel)
    {
        $this->carousel = $carousel;

        return $this;
    }

    /**
     * Get carousel
     *
     * @return bool
     */
    public function getCarousel()
    {
        return $this->carousel;
    }
    /**
     * Set photo
     *
     * @param boolean $photo
     *
     * @return Gallerie
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return bool
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}

