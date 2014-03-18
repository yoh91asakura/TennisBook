<?php

namespace TennisBook\AccueilBundle\Datafixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\DateTime;
use TennisBook\Entity\Annonce;

class LoadUserData implements FixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        for ($i=1; $i<21; $i++) {
            $testAnnonce = new Annonce();
            $testAnnonce->setTitre('annonce '.$i);
            $testAnnonce->setDate(new \DateTime("now"));
            $testAnnonce->setDescription('Description de l\'annonce '.$i.' encore '. (20-$i) .' annonces à venir !');
            $testAnnonce->setLieux('Terrain de tennis '.$i);

            $manager->persist($testAnnonce);
        }
        $manager->flush();

    }
} 