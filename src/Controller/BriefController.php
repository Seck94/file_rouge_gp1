<?php

namespace App\Controller;

use DateTime;
use App\Entity\Brief;
use App\Entity\Ressource;
use App\Entity\PromoBrief;
use App\Entity\LivrableAttendu;
use App\Repository\TagRepository;
use App\Controller\BriefController;
use App\Entity\PromoBriefApprenant;
use App\Repository\BriefRepository;
use App\Repository\PromoRepository;
use App\Entity\BriefLivrableAttendu;
use App\Repository\GroupeRepository;
use App\Repository\NiveauRepository;
use App\Repository\PromoBriefRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReferentielRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BriefController extends AbstractController
{
    /**
     * @Route("/brief", name="brief")
     */
    public function index()
    {
        return $this->render('brief/index.html.twig', [
            'controller_name' => 'BriefController',
        ]);
    }

    /**
     * @Route(
     *     path="api/formateur/briefs",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\BriefController::addBrief",
     *          "__api_resource_class"=Brief::class,
     *          "__api_collection_operation_name"="add_briefs"
     *     }
     * )
    */
        public function addBrief (Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager,ReferentielRepository $ref,TagRepository $tag,NiveauRepository $niveau,GroupeRepository $groupe,PromoBriefRepository $promo,\Swift_Mailer $mailer)
        
        {
            $Brief_json = $request -> getContent();
            $Brief_tab = $serializer -> decode($Brief_json,"json");
            $Brief = new Brief();

            if (isset($Brief_tab["langue"]) && !empty ($Brief_tab["langue"]))
            {
                $Brief->setLangue($Brief_tab["langue"]);
                
                if (isset($Brief_tab["titre"]) && !empty ($Brief_tab["titre"]))
                {
                    
                    $Brief->setTitre($Brief_tab["titre"]);   
                    if ( isset($Brief_tab["contexte"]) && !empty($Brief_tab["contexte"]))
                    {
                           
                        $Brief->setContexte($Brief_tab["contexte"]);
                        
                        if (isset ($Brief_tab["modalitePedagogiques"]) && !empty ($Brief_tab["modalitePedagogiques"]))
                        {
                            $Brief->setModalitesPedagogiques($Brief_tab["modalitePedagogiques"]);
                            
                            if (isset ($Brief_tab["criterePerformance"]) && !empty ($Brief_tab["criterePerformance"])) 
                            {
                                $Brief->setCriteresDePerformance($Brief_tab["criterePerformance"]);
                                
                                if (isset ($Brief_tab["modaliteEvaluation"]) && !empty ($Brief_tab["modaliteEvaluation"]))
                                {
                                    $Brief->setModalitesEvaluation($Brief_tab["modaliteEvaluation"]);
                                    
                                    if (isset($Brief_tab["description"]) && !empty ($Brief_tab["description"]))
                                    {
                                        $Brief->setDescription($Brief_tab["description"]);
                                        
                                        if (isset ($Brief_tab["statut"]) && !empty ($Brief_tab["statut"]))
                                        {
                                            $Brief->setStatut($Brief_tab["statut"]);

                                            if (isset ($Brief_tab["livrablesAttendus"]) && !empty ($Brief_tab["livrablesAttendus"]))
                                            {
                                                $Brief->setLivrablesAttendus($Brief_tab["livrablesAttendus"]);
                                                
                                                
                                                if ( isset($Brief_tab["referentiel"]["id"]) && !empty ($Brief_tab["referentiel"]["id"]) )
                                                {
                                                        if ($ref->find($Brief_tab["referentiel"]["id"]));
                                                        {
                                                            $referentiel=$ref->find($Brief_tab["referentiel"]["id"]);
                                                            $Brief->setReferentiel($referentiel); 

                                                            if (isset ($Brief_tab["tags"]) && !empty ($Brief_tab["tags"]))
                                                            {
                                                                foreach ($Brief_tab["tags"] as $key => $value) 
                                                                {
                                                                    if ($tag->find($value))
                                                                    {
                                                                        $Tag=$tag->find($value);
                                                                        $Brief->addTag($Tag);
                                                                        
                                                                    }                                                                                 
                                                                }
                                                                
                                                                    if (isset ($Brief_tab["niveaux"]) && !empty ($Brief_tab["niveaux"]))
                                                                    {
                                                                        foreach ($Brief_tab["niveaux"] as $key => $value) 
                                                                        {
                                                                            if ($niveau->find($value))
                                                                            {
                                                                                $Niveau=$niveau->find($value);
                                                                                //$grp=$Niveau->getCompetence()->getGroupecompetences();
                                                                                $Brief->addNiveau($Niveau);
                                                                                
                                                                            }                                                                                 
                                                                        }
                                                                        
                                                                        if (isset ($Brief_tab["ressources"]) && !empty ($Brief_tab["ressources"]))
                                                                        {   
                                                                                foreach ($Brief_tab["ressources"] as $key => $value) 
                                                                                {
                                                                                     if (!empty ($value) && $value["type"]=="url")
                                                                                     {
                                                                                        $Resource=new Ressource();
                                                                                        $Resource->setTitre($value["titre"]);
                                                                                        $Resource->setUrl($value["url"]);
                                                                                        $Brief->addRessource($Resource);
                                                                                    
                                                                                     }
                                                                                    
                                                                                                                                                          
                                                                                }

                                                                                if (isset ($Brief_tab["livrablesattendus"]) && !empty ($Brief_tab["livrablesattendus"]))
                                                                                {   
                                                                                        foreach ($Brief_tab["livrablesattendus"] as $key => $value) 
                                                                                        {
                                                                                            $livrablesattendus=new LivrableAttendu();
                                                                                            $livrablesattendus->setLibelle($value["libelle"]);   
                                                                                            $BriefLivrableAttendu=new BriefLivrableAttendu();
                                                                                            $BriefLivrableAttendu->setBrief($Brief);
                                                                                            $BriefLivrableAttendu->setLivrableAttendu($livrablesattendus);
                                                                                            $Brief->addBriefLivrableAttendu($BriefLivrableAttendu);   
                                                                                            
                                                                                        }
                                                                                            
                                                                                                                                                                  
                                                                                        
                                                                                

                                                                           
                                                                           if (isset ($Brief_tab["groupes"]) && !empty ($Brief_tab["groupes"]))
                                                                           {
                                                                                foreach ($Brief_tab["groupes"] as $key => $value) 
                                                                                {
                                                                                    if ($groupe->find($value))
                                                                                    {
                                                                                        
                                                                                        $Groupe=$groupe->find($value);
                                                                                        $Brief->addGroupe($Groupe);
                                                                                        $Promo=$Groupe->getPromo();
                                                                                        $PromoBrief=new PromoBrief();
                                                                                        $PromoBrief->setBrief($Brief);
                                                                                        $PromoBrief->setPromo($Promo);
                                                                                        $PromoBrief->setStatut("en cours");
                                                                                        $Brief->addPromoBrief($PromoBrief);
                                                                                        $PromoBriefApprenant=new PromoBriefApprenant();
                                                                                        $PromoBriefApprenant->setStatut("validé");
                                                                                        $PromoBriefApprenant->addPromoBrief($PromoBrief);
                                                                                        $tab=$Groupe->getApprenants();
                                                                                        foreach ($tab as $key => $value) 
                                                                                        {
                                                                                            $PromoBriefApprenant->addApprenant($value);
                                                                                            
                                                                                            $message = (new \Swift_Message('Ajout'))
                                                                                            ->setFrom('admin@gmail.com')
                                                                                            ->setTo($apprenant->getEmail())
                                                                                            ->setBody('Bonjour cher(e) apprenant(e), vous avez été assigné au brief '.$Brief->getTitre());
                                                                                                // $mailer->send($message); // on envoie
                                                                                            
                                                                                        }
                                                                                        
                                                                                    }                                                                                 
                                                                                }
                                                                           }     

                                                                        }
                                                            
                                                                    }
                                                                
                                                                }

                                                            }

                                                        }                    
                                                
                                                }                                            
                                            }
                                        }
                                    }    
                                }   
                        }
                    }
                }
                
                    $errors = $validator->validate($Brief);
                    if (count($errors))
                    {
                        $errors = $serializer->serialize($errors,"json");
                        return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
                    }

                    $Brief->setDatecreation(new \DateTime());
                    $user = $this->get('security.token_storage')->getToken()->getUser();
                    $Brief->setFormateur($user);
                    $manager->persist($Brief);
                    $manager->flush();
                    
                    return $this->json($Brief,Response::HTTP_CREATED);
    }
                }
    }



/**
     * @Route(
     *     path="api/formateur/briefs/{id}",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\BriefController::addBrief",
     *          "__api_resource_class"=Brief::class,
     *          "__api_collection_operation_name"="duplique_briefs",
     *          
     *     }
     * )
    */

    public function dupliqueBrief(Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager,BriefRepository $brief,$id)
    {
        
        $Brief=$brief->find($id);
        $duplique=clone $Brief;
        //Suppression de l'id
        $duplique->setId(null);
        //Suppression de la collection de PromoBrief dans Brief
        $duplique->setPromoBrief(new ArrayCollection());
        //Suppression de la collection de Groupes dans Brief
        $duplique->setGroupe(new ArrayCollection());
        //Suppression de la collection de Niveaux dans Brief
        $duplique->setNiveaux(new ArrayCollection());
        
        $tab_Brieflivrableatt=$duplique->getBriefLivrableAttendus();
        $duplique->setBriefLivrableAttendu(new ArrayCollection());
        $manager->persist($duplique);
        $manager->flush();
        foreach ($tab_Brieflivrableatt as $key => $BriefLivrableatt) 
        {
            $BriefLivrableAttendu=new BriefLivrableAttendu();
            $livrableAttendu=$BriefLivrableatt->getLivrableAttendu();
            $BriefLivrableAttendu->setLivrableAttendu($livrableAttendu);
            $BriefLivrableAttendu->SetBrief($duplique);
            $manager->persist($BriefLivrableAttendu);
            $manager->flush();
        }
        //dd($Brief->getBriefLivrableAttendus());
        

        /* 
                                Autres Méthode de duplication

            $PromoBriefs=$duplique->getPromoBriefs();
            Obtention de chaque PromoBrief
            foreach ($PromoBriefs as $key => $PromoBrief) 
            {
                Obtention des apprenants du PromoBrief
                $PromoBriefApprenant=$PromoBrief->getPromoBriefApprenant();   
                $tab_Apprenants=$PromoBrief->getPromoBriefApprenant()->getApprenant();
                
                foreach ($tab_Apprenants as $key => $apprenant) 
                {
                    Suppression des apprenants dans PromoBriefApprenant
                    $PromoBriefApprenant->removeApprenant($apprenant);
                } 

                Suppression du PromoBrief dans le Brief
                $duplique->removePromoBrief($PromoBrief);

                 $Groupes=$duplique->getGroupes();
                Suppression des groupes
                foreach ($Groupes as $key => $Groupe) 
                {
                     $duplique->removeGroupe($Groupe);
                }
            }
         
         */
        

        
        
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $duplique->setFormateur($user);
        $duplique->setDateCreation(new \DateTime());
        $manager->persist($duplique);
        $manager->flush();  
        return $this->json($duplique,Response::HTTP_CREATED);  
    }

    /**
     * @Route(
     *     path="api/formateur/promo/{idpromo}/brief/{idbrief}/assignation",
     *     methods={"GET"},
     *     defaults={
     *          "__controller"="App\Controller\BriefController::assignationBrief",
     *          "__api_resource_class"=Brief::class,
     *          "__api_collection_operation_name"="assignation_briefs",
     *     }
     * )
    */
    
    

    public function assignationBrief (Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager,BriefRepository $brief,PromoRepository $promo,GroupeRepository $groupe,$idpromo,$idbrief)
    {
        $Brief_json = $request -> getContent();
        $Brief_tab = $serializer -> decode($Brief_json,"json");
        if($promo->find($idpromo))
        {
            $Promo=$promo->find($idpromo);
            if ($brief->find($idbrief))
            {
                $Brief=$brief->find($idbrief);
                if (isset ($Brief_tab["groupes"]) && !empty($Brief_tab["groupes"]))
                {
                    foreach ($Brief_tab["groupes"] as $key => $value) 
                    {
                        if (!empty ($value["id"]) && $groupe->find($value["id"])!=null)
                        {
                            if(isset ($value["action"]) && $value["action"]=="affecter")
                            {

                               $Brief->addGroupe($groupe->find($value["id"]));
                               $Promo=$groupe->find($value["id"])->getPromo();
                               $PromoBrief=new PromoBrief();
                               $PromoBrief->setBrief($Brief);
                               $PromoBrief->setPromo($Promo);
                               $PromoBrief->setStatut("assigné");
                               $Brief->addPromoBrief($PromoBrief);
                               $manager->persist($Brief);
                               $manager->flush();
                               $PromoBriefApprenant=new PromoBriefApprenant();
                               $PromoBriefApprenant->setStatut("en cours");
                               $PromoBriefApprenant->addPromoBrief($PromoBrief);
                               $tab=$groupe->find($value["id"])->getApprenants();
                               foreach ($tab as $key => $value) 
                               {
                                   $PromoBriefApprenant->addApprenant($value);
                                   $manager->persist($PromoBriefApprenant);
                                   $manager->flush();
                               }
                                
                            }
                            /*else
                                if (isset ($value["action"]) && $value["action"]=="desaffecter")
                                {
                                    $PromoBrief->setStatut("desassigné");
                                    $manager->persist($PromoBriefApprenant);
                                    $manager->flush();
                                }
                            */
                        }

                    }
                }


            }
        }   
        return $this->json($Brief,Response::HTTP_CREATED);
    }


    /**
     * @Route(
     *     path="api/formateur/promo/{idpromo}/brief/{idbrief}",
     *     methods={"PUT"},
     *     defaults={
     *          "__controller"="App\Controller\BriefController::assignationBrief",
     *          "__api_resource_class"=Brief::class,
     *          "__api_collection_operation_name"="update_briefs",
     *     }
     * )
    */

    public function UpdateBrief(Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager,BriefRepository $brief,PromoRepository $promo,GroupeRepository $groupe,$idpromo,$idbrief)
    {
        
    }


}