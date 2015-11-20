<?php
// WildPartyBundle/Listener/UtilisateurSoireeListener.php

namespace WildPartyBundle\Listener;

use Doctrine\ORM\Event\PreUpdateEventArgs;
use WildPartyBundle\Entity\Utilisateur_soiree;

class UtilisateurSoireeListener
{
    public function preUpdate(PreUpdateEventArgs $eventArgs)
    {
        if ($eventArgs->getEntity() instanceof Utilisateur_soiree) {
            if ($eventArgs->hasChangedField('paye')) {

                $date = new \DateTime('now');

                $interval = $date->diff($eventArgs->getEntity()->getSoiree()->getDateDebut());
                $diff = $interval->format('%a');

                if ( $diff > 3) {

                    $eventArgs->getEntity()->setPenalites( $diff / 2);

                    $eventArgs->getEntity()->setRetard($diff.' jours');
                }


            }
        }
    }
}