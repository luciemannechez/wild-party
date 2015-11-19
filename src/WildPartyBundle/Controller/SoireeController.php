<?php

namespace WildPartyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WildPartyBundle\Entity\Soiree;
use Application\Sonata\UserBundle\Entity\User;
use WildPartyBundle\Entity\Utilisateur_soiree;

class SoireeController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $soirees = $em->getRepository('WildPartyBundle:Soiree')->findAll();

        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $models = array();
        foreach ($soirees as $soiree)
        {
            $utilisateur_soiree = $em->getRepository('WildPartyBundle:Utilisateur_soiree')->findOneBy(array('soiree' => $soiree, 'user' => $user));
            $model = new \WildPartyBundle\Model\Soiree($soiree, $utilisateur_soiree);
            $models[] = $model;

        }

        return $this->render('WildPartyBundle:Soiree:index.html.twig', array(
            'soirees' => $models,
        ));
    }

    public function inscriptionAction(Soiree $id_soiree)
    {
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $utilisateur_soiree = $em->getRepository('WildPartyBundle:Utilisateur_soiree')->findOneBy(array('soiree' => $id_soiree, 'user' => $user));

        if ($utilisateur_soiree == null)
        {
            // Inscription
            $soiree = $em->getRepository('WildPartyBundle:Soiree')->findOneById($id_soiree);
            $entity = new Utilisateur_soiree();
            $entity->setUser($user);
            $entity->setSoiree($id_soiree);
            $entity->setMontant($soiree->getPrix());

            $em->persist($entity);
            $em->flush();
        }
        else
        {
            // Desinscription
            $em->remove($utilisateur_soiree);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('wild_party_homepage'));
    }
}
