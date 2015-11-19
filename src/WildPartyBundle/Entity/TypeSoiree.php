<?php

namespace WildPartyBundle\Entity;

/**
 * TypeSoiree
 */
class TypeSoiree
{
    public function __toString() {
        return $this->type;
    }

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;


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
     * Set type
     *
     * @param string $type
     *
     * @return TypeSoiree
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var boolean
     */
    private $prix_fixe;


    /**
     * Set prixFixe
     *
     * @param boolean $prixFixe
     *
     * @return TypeSoiree
     */
    public function setPrixFixe($prixFixe)
    {
        $this->prix_fixe = $prixFixe;

        return $this;
    }

    /**
     * Get prixFixe
     *
     * @return boolean
     */
    public function getPrixFixe()
    {
        return $this->prix_fixe;
    }
}
