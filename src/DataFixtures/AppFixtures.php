<?php

namespace App\DataFixtures;
use Faker\Factory;
use App\Entity\Tag;
use App\Entity\Groupetag;
use App\Entity\User;
use App\Entity\Niveau;
use App\Entity\Profil;
use App\Entity\Competence;
use App\Entity\Referentiel;
use App\Entity\Groupecompetence;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    //private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
       $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
        
        $faker = Factory::create('fr_FR');
         // $product = new Product();
        // $manager->persist($product);
        $profils=['FORMATEUR','CM','APPRENANT','ADMIN'];
        for ($i = 0; $i < 4; $i++) {
            $profil= new Profil();
            $profil->setLibelle($profils[$i]);
            for($j =0; $j<3; $j++){
                $users= new User();
                $users->setNom($faker->lastname);
                $users->setPrenom($faker->firstname);
                $users->setEmail($faker->email);
                $users->setProfil($profil);
                $users->setStatut("actif");
                $users->setAvatar($faker->imageUrl());
                $users->setUsername(strtolower($faker->name()));
                $password = $this->encoder->encodePassword($users, "passe");
                $users->setPassword($password);
                $manager->persist($profil);
                $manager->persist($users);
                // $manager->flush();
            }            
        }   
        $niveaux = ["Niveau1","Niveau2","Niveau3"];
        $critereEvaluation = ["CritereEvaluation1","CritereEvaluation2","CritereEvaluation3"];
        $competences = ["Connaissances solide en PHP","excellent niveau en Bootsrap","bon niveux en Ajax"];


        $referentiel = new Referentiel();
        $referentiel -> setLibelle("DEV WEB MOBILE");
        $referentiel -> setPresentation("developpement d'applications web et mobile");
        $referentiel -> setProgramme("Programme de ce referentiel");
        $referentiel -> setCritereAdmission("Critère d'admission de ce referentiel");
        $referentiel -> setCritereEvaluation("Critère d'évaluation de ce referentiel");

        $grpCompetence = new Groupecompetence();
        $grpCompetence -> setLibelle("Developper le backend d'une appli");
        $grpCompetence -> setDescriptif("Le descriptif pour developper le backend d'une application web");
        $grpCompetence -> addReferentiel($referentiel);

        $groupeTags = new Groupetag();
        $groupeTags -> setLibelle("FrontEnd");
        $manager->persist($groupeTags);
        $manager->flush();

        $tags = ["PHP", "JavaScript","Ajax","Json"];
        for ($i=0; $i < 4; $i++) { 
            $tag = new Tag();
            $tag -> setLibelle($tags[$i]);
            $tag -> setDescriptif("Descriptif de ce tag");
            $tag -> addGroupetag($groupeTags);
            $manager->persist($tag);
            $manager->flush();
        }

        for ($i=0; $i < 3; $i++) { 
            $competence = new Competence();
            $competence -> setlibelle($competences[$i]);
            for ($j=0; $j < 3; $j++) {
                $niveau = new Niveau();
                $niveau -> setLibelle($niveaux[$i]);
                $niveau -> setCritereEvaluation($critereEvaluation[$i]);
                $niveau -> setGroupeAction("Action A, Action B, Action C");
                $competence -> addNiveau($niveau);
                $manager->persist($niveau);
                $manager->persist($competence);
                // $manager->flush();
            }
            $grpCompetence -> addCompetence($competence);
        }
        $grpCompetence -> setUser($users);
        $manager->persist($referentiel);
        $manager->persist($grpCompetence);
        // $manager->flush();
    }
}
