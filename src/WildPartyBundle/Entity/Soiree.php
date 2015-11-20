<?php

namespace WildPartyBundle\Entity;
use Symfony\Component\Validator\Context\ExecutionContext;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

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

    /**Validate paypalEmailAddress if paypal is selected
     * @param ExecutionContext $context
     * @return void
     */
    public function isPrixFixe(ExecutionContextInterface $context)
    {
        if (in_array($this->type->getPrixFixe(), array(true))) {
            // If you're using the new 2.5 validation API (you probably are!)
            if (!$this->getPrix()) {
                $context->buildViolation('Le prix doit être renseigné')
                    ->atPath('prix')
                    ->addViolation();
            }
        }
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
    protected $nb_place = -1;

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
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;

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

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
