<?php

namespace WildPartyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
