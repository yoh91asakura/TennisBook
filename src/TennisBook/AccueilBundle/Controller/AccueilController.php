<?php

namespace TennisBook\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('TennisBookAccueilBundle:Accueil:index.html.twig');
    }
}