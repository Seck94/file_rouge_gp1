<?php

namespace App\DataFixtures;
use Faker\Factory;
use App\Entity\Profil;
use App\Entity\User;
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
        $profils=['ADMIN','FORMATEUR','CM'];
        for ($i = 0; $i < 3; $i++) {
            
           

                $profil= new Profil();
                $profil->setLibelle($profils[$i]);
                for($j =0; $j<3; $j++){
                $users= new User();
                $users->setNom($faker->lastname);
                $users->setPrenom($faker->firstname);
                $users->setEmail($faker->email);
                $users->setProfil($profil);
                $users->setStatut("actif");
                $users->setAvatar("sa_flr");
                $users->setUsername(strtolower($profils[$i].$j));
                $password = $this->encoder->encodePassword($users, "admin");
                $users->setPassword($password);

                $manager->persist($profil);
                $manager->persist($users);
                $manager->flush();

            }
            
        }


       
    }
}
