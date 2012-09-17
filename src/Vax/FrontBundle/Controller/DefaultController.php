<?php

namespace Vax\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VaxFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}
