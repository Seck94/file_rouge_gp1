<?php

namespace App\DataFixtures;

use App\Entity\Referentiel;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ReferentielFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $referentiel = new Referentiel();
        $referentiel -> setLibelle("DEV WEB MOBILE");
        $referentiel -> setPresentation("developpement d'applications web et mobile");
        $referentiel -> setProgramme("Programme de ce referentiel");
        $referentiel -> setCritereAdmission("Critère d'admission de ce referentiel");
        $referentiel -> setCritereEvaluation("Critère d'évaluation de ce referentiel");
        $this -> addReference("referentiel", $referentiel);

        $manager->persist($referentiel);
        $manager->flush();
    }
}
