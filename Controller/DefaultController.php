<?php

namespace Arachnias\Bundle\FoundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ArachniasFoundationBundle:Default:index.html.twig', array('name' => $name));
    }
}
