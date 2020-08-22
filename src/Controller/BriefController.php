<?php

namespace App\Controller;

use DateTime;
use App\Entity\Brief;
use App\Entity\Ressource;
use App\Entity\PromoBrief;
use App\Repository\TagRepository;
use App\Controller\BriefController;
use App\Repository\BriefRepository;
use App\Repository\PromoRepository;
use App\Repository\GroupeRepository;
use App\Repository\NiveauRepository;
use App\Repository\PromoBriefRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReferentielRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
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
        public function addBrief (Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager,ReferentielRepository $ref,TagRepository $tag,NiveauRepository $niveau,GroupeRepository $groupe,PromoBriefRepository $promo)
        
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
                                                                                $grp=$Niveau->getCompetence()->getGroupecompetences();
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
                                                                                        $Brief->addPromoBrief($PromoBrief);
                                                                                        $tab=$Groupe->getApprenants();
                                                                                        dd($tab);
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
     *          "id"=null
     *     }
     * )
    */

    public function dupliqueBrief(Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager,BriefRepository $brief,$id)
    {
        
        $Brief=$brief->find($id);
        $new_brief=new Brief();
        $new_brief->setLangue($Brief->getLangue());
        $new_brief->setTitre($Brief->getTitre());
        $new_brief->setDescription($Brief->getDescription());
        $new_brief->setContexte($Brief->getContexte());
        $new_brief->setLivrablesAttendus($Brief->getLivrablesAttendus());
        $new_brief->setStatut($Brief->getStatut());
        $new_brief->setModalitesPedagogiques($Brief->getModalitesPedagogiques());
        $new_brief->setCriteresDePerformance($Brief->getCriteresDePerformance());
        $new_brief->setModalitesEvaluation($Brief->getModalitesEvaluation());
        $new_brief->setDatecreation(new \Datetime());
        $new_brief->setReferentiel($Brief->getReferentiel());
        dd($new_brief);
        $manager->persist($new_brief);
        $manager->flush();  
        return $this->json($Brief,Response::HTTP_CREATED);      
    }
}