<?php

namespace WildPartyBundle\Entity;

/**
 * Utilisateur_soiree
 */
class Utilisateur_soiree
{

    public function __construct()
    {
        $this->setPaye(false);
        $this->setMontant(0);
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $paye;

    /**
     * @var float
     */
    private $montant;


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
     * Set paye
     *
     * @param boolean $paye
     *
     * @return Utilisateur_soiree
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return boolean
     */
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Utilisateur_soiree
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }
    /**
     * @var \WildPartyBundle\Entity\Soiree
     */
    private $soiree;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set soiree
     *
     * @param \WildPartyBundle\Entity\Soiree $soiree
     *
     * @return Utilisateur_soiree
     */
    public function setSoiree(\WildPartyBundle\Entity\Soiree $soiree = null)
    {
        $this->soiree = $soiree;

        return $this;
    }

    /**
     * Get soiree
     *
     * @return \WildPartyBundle\Entity\Soiree
     */
    public function getSoiree()
    {
        return $this->soiree;
    }

    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     *
     * @return Utilisateur_soiree
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var boolean
     */
    private $inscrit = false;


    /**
     * Set inscrit
     *
     * @param boolean $inscrit
     *
     * @return Utilisateur_soiree
     */
    public function setInscrit($inscrit)
    {
        $this->inscrit = $inscrit;

        return $this;
    }

    /**
     * Get inscrit
     *
     * @return boolean
     */
    public function getInscrit()
    {
        return $this->inscrit;
    }
}
