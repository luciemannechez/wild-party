<?php

namespace WildPartyBundle\Entity;
use Doctrine\ORM\Event\PreUpdateEventArgs;


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
    protected $soiree;

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
    /**
     * @var float
     */
    private $penalites = 0;


    /**
     * Set penalites
     *
     * @param float $penalites
     *
     * @return Utilisateur_soiree
     */
    public function setPenalites($penalites)
    {
        $this->penalites = $penalites;

        return $this;
    }

    /**
     * Get penalites
     *
     * @return float
     */
    public function getPenalites()
    {
        return $this->penalites;
    }
    /**
     * @var \DateTime
     */
    private $date_inscription;


    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return Utilisateur_soiree
     */
    public function setDateInscription($dateInscription)
    {
        $this->date_inscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->date_inscription;
    }
    /**
     * @var string
     */
    private $retard;


    /**
     * Set retard
     *
     * @param string $retard
     *
     * @return Utilisateur_soiree
     */
    public function setRetard($retard)
    {
        $this->retard = $retard;

        return $this;
    }

    /**
     * Get retard
     *
     * @return string
     */
    public function getRetard()
    {
        return $this->retard;
    }
}
