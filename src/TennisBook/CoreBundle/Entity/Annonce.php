<?php

namespace TennisBook\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="TennisBook\CoreBundle\Entity\AnnonceRepository")
 */
class Annonce {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $titre;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $lieux;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Titre
     *
     * @param string $titre
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get Titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set Lieux
     *
     * @param string $lieux
     * @return Annonce
     */
    public function setLieux($lieux)
    {
        $this->lieux = $lieux;

        return $this;
    }

    /**
     * Get Lieux
     *
     * @return string 
     */
    public function getLieux()
    {
        return $this->lieux;
    }

    /**
     * Set Date
     *
     * @param \DateTime $date
     * @return Annonce
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
