<?php

namespace TennisBook\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TennisBook\CoreBundle\Entity\Annonce;
use TennisBook\CoreBundle\Form\AnnonceType;
use Symfony\Component\HttpFoundation\Request;
use TennisBook\UserBundle\Form\UserType;
use TennisBook\UserBundle\Entity\User;

class AccueilController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            //return $this->redirect($this->generateUrl('task_success'));
        }

        $form->handleRequest($request);

        return $this->render('TennisBookAccueilBundle:Accueil:index.html.twig', array(
            'form' => $form->createView(),
        ));

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

    public function indexAmateurAction()
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $annonces = $em->getRepository('TennisBookCoreBundle:Annonce')->getRecentAnnonces();

        foreach($annonces as $annonce) {
            $annonce->setDate($annonce->getDate()->format('Y/m/d'));
        }
        return $this->render('TennisBookAccueilBundle:Accueil:listeAnnonce.html.twig', array('annonces' => $annonces));
    }

    public function createAnnonceAction(Request $request)
    {
        $annonce = new Annonce();
        $form = $this->createForm(new AnnonceType(), $annonce);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();
            //return $this->redirect($this->generateUrl('task_success'));
        }

        $form->handleRequest($request);

        return $this->render('TennisBookAccueilBundle:Annonce:newAnnonce.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}