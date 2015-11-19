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

        return $this->render('WildPartyBundle:Soiree:index.html.twig', array(
            'soirees' => $soirees
        ));
    }

    public function inscriptionAction(Soiree $id_soiree)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = new Utilisateur_soiree();

        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $soirees = $em->getRepository('WildPartyBundle:Soiree')->findOneById($id_soiree);

        $prix = $soirees->getPrix();

        $entity->setUser($user);
        $entity->setSoiree($id_soiree);
        $entity->setMontant($prix);

        $em->persist($entity);
        $em->flush();

        $soireesAll = $em->getRepository('WildPartyBundle:Soiree')->findAll();

        return $this->redirect($this->generateUrl('wild_party_homepage', array(
            'soirees' => $soireesAll
        )));
    }

    public function desinscriptionAction(Soiree $id_soiree)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('WildPartyBundle:Utilisateur_soiree')->findOneBySoiree($id_soiree);

        $soireesAll = $em->getRepository('WildPartyBundle:Soiree')->findAll();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Utilisateur_soiree entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('wild_party_homepage', array(
            'soirees' => $soireesAll
        )));
    }
}
