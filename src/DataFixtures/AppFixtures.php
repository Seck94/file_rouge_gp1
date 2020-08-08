<?php

namespace App\DataFixtures;
use App\Entity\CM;
use Faker\Factory;
use App\Entity\Tag;
use App\Entity\User;
use App\Entity\Niveau;
use App\Entity\Profil;
use App\Entity\Apprenant;
use App\Entity\Formateur;
use App\Entity\Groupetag;
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
                if ($i === 0) {
                    $users= new Formateur();
                }
                elseif ($i === 1) {
                    $users= new CM();
                }
                elseif ($i === 2) {
                    $users= new Apprenant();
                }
                else {
                    $users= new User();
                }
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
                $manager->flush();
            }            
        }   
        $niveaux = ["Niveau1","Niveau2","Niveau3"];
        $critereEvaluation = ["CritereEvaluation1","CritereEvaluation2","CritereEvaluation3"];
        $competences = ["Connaissances solide en PHP","excellent niveau en Bootsrap","bon niveux en Ajax"];

        
        $referentiel = new Referentiel();
        $referentiel -> setLibelle($ref_lib[$i]);
        $referentiel -> setPresentation($ref_prt[$i]);
        $referentiel -> setProgramme($ref_pg[$i]);
        $referentiel -> setCritereAdmission($ref_Cta[$i]);
        $referentiel -> setCritereEvaluation($ref_Cte[$i]);
       

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
                $niveau -> setLibelle($niveaux[$j]);
                $niveau -> setCritereEvaluation($critereEvaluation[$i]);
                $niveau -> setGroupeAction("Action A, Action B, Action C");
                $competence -> addNiveau($niveau);
                $manager->persist($niveau);
                $manager->persist($competence);
                $manager->flush();
            }
            $grpCompetence -> addCompetence($competence);
        }
        $grpCompetence -> setUser($users);
        $manager->persist($referentiel);
        $manager->persist($grpCompetence);
            $manager->flush();
    }
}
