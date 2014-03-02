<?php

namespace TennisBook\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TennisBookCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
