<?php

namespace TennisBook\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TennisBook\CoreBundle\Entity\Annonce;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('TennisBookAccueilBundle:Accueil:index.html.twig');
    }

    public function indexProAction()
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $annonces = $em->getRepository('TennisBookCoreBundle:Annonce')->getRecentAnnonces();

        foreach($annonces as $annonce) {
            $annonce->setDate($annonce->getDate()->format('Y/m/d'));
        }
        return $this->render('TennisBookAccueilBundle:Accueil:listeAnnonce.html.twig', array('annonces' => $annonces));
    }
}