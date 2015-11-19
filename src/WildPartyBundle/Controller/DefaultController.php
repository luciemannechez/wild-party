<?php

namespace WildPartyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WildPartyBundle:Default:index.html.twig', array('name' => $name));
    }
}
