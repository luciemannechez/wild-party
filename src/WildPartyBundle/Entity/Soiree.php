<?php

namespace WildPartyBundle\Entity;

/**
 * Soiree
 */
class Soiree
{

    public function __construct(){
        $this->setDateDebut(new \DateTime('now'));
    }

    public function __toString() {
        return (string)$this->id;
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $dateDebut;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Soiree
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
     * @return Soiree
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Soiree
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }
    /**
     * @var integer
     */
    protected $nb_place = 0;

    /**
     * @var float
     */
    private $prix;


    /**
     * Set nbPlace
     *
     * @param integer $nbPlace
     *
     * @return Soiree
     */
    public function setNbPlace($nbPlace)
    {
        $this->nb_place = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return integer
     */
    public function getNbPlace()
    {
        return $this->nb_place;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Soiree
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }
    /**
     * @var \WildPartyBundle\Entity\TypeSoiree
     */
    private $type;


    /**
     * Set type
     *
     * @param \WildPartyBundle\Entity\TypeSoiree $type
     *
     * @return Soiree
     */
    public function setType(\WildPartyBundle\Entity\TypeSoiree $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \WildPartyBundle\Entity\TypeSoiree
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;


    /**
     * Add user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     *
     * @return Soiree
     */
    public function addUser(\Application\Sonata\UserBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     */
    public function removeUser(\Application\Sonata\UserBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var integer
     */
    private $nb_personnes = 0;


    /**
     * Set nbPersonnes
     *
     * @param integer $nbPersonnes
     *
     * @return Soiree
     */
    public function setNbPersonnes($nbPersonnes)
    {
        $this->nb_personnes = $nbPersonnes;

        return $this;
    }

    /**
     * Get nbPersonnes
     *
     * @return integer
     */
    public function getNbPersonnes()
    {
        return $this->nb_personnes;
    }

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     *
     * @return Soiree
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }
}
