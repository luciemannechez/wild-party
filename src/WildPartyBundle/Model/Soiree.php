<?php

namespace WildPartyBundle\Model;
use Application\Sonata\UserBundle\Entity\User;
use WildPartyBundle\Entity\Utilisateur_soiree;

/**
 * Created by PhpStorm.
 * User: Lucyole
 * Date: 19/11/15
 * Time: 16:39
 */
class Soiree extends \WildPartyBundle\Entity\Soiree
{
    private $inscrit;
    private $montant;
    private $paye;
    private $id_soiree;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Soiree
     */
    public function setIdSoiree($id_soiree)
    {
        $this->id_soiree = $id_soiree;

        return $this;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Soiree
     */
    public function getIdSoiree()
    {
        return $this->id_soiree;
    }

    /**
     * Set paye
     *
     * @param boolean $paye
     *
     * @return Soiree
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
     * @return Soiree
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
     * Set inscrit
     *
     * @param boolean $inscrit
     *
     * @return Soiree
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

    public function __construct(\WildPartyBundle\Entity\Soiree $soiree,\WildPartyBundle\Entity\Utilisateur_soiree $inscription = null)
    {
        $this->setNom($soiree->getNom());
        $this->setDescription($soiree->getDescription());
        $this->setDateDebut($soiree->getDateDebut());
        $this->setNbPlace($soiree->getNbPlace());
        $this->setType($soiree->getType());
        $this->setPrix($soiree->getPrix());
        $this->setIdSoiree($soiree->getId());
        $this->setNbPersonnes($soiree->getNbPersonnes());
        $this->setUser($soiree->getUser());


        if ( $soiree->getType() == "repas" ) {
            $this->montant = $soiree->getPrix();
        }

        elseif (isset($inscription))
        {
            $this->montant = $inscription->getMontant();
        }
        else
        {
            $this->setmontant = 0;
        }

        if ( isset($inscription) && $inscription->getPaye() ) {
            $this->setPaye(true);
        }


        if (isset($inscription)) {
            $this->inscrit = true;
        } else {
            $this->inscrit = false;
        }
    }
}