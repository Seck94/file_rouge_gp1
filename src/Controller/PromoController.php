<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Promo;
use App\Entity\Groupe;
use DateTimeInterface;
use App\Entity\Apprenant;
use App\Entity\Formateur;
use App\Entity\Referentiel;
use App\Repository\UserRepository;
use App\Repository\FormateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReferentielRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;





class PromoController extends AbstractController
{
    /**
     * @Route(
     *     path="/api/admin/promos",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\PromoController::addPromo",
     *          "__api_resource_class"=Promo::class,
     *          "__api_collection_operation_name"="add_promo"
     *     }
     * )
    */
    public function addPromo(Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager,FormateurRepository $formateur_repo, ReferentielRepository $ref_repo,UserRepository $user_repo,\Swift_Mailer $mailer)
    {
        $Promo_json = $request -> getContent();

        $Promo_tab = $serializer -> decode($Promo_json,"json");
        $Promo = new Promo();
        if (!$Promo_tab['referentiel']['id']) {
            return $this -> json(["message" => "Une promo doit etre liée à un referentiel"],Response::HTTP_FORBIDDEN);
        }
        $Referentiel_id = $Promo_tab['referentiel']['id'];
        $Referentiel = new Referentiel();
        if (!($Referentiel = $ref_repo -> find($Referentiel_id))) {
            return $this ->json("Referentiel introuvable", Response::HTTP_NOT_FOUND,);
        }
        $Promo -> setReferentiel($Referentiel);
        $Promo -> setLangue($Promo_tab['langue']);
        $Promo -> setTitre($Promo_tab['titre']);
        $Promo -> setDescription($Promo_tab['descriptif']);
        $Promo -> setLieu($Promo_tab['lieu']);
        $Promo -> setDateDebut(new \DateTime());
        $Promo -> setDateFinProvisoire(new \DateTime($Promo_tab['dateFinProvisoire']));
        $Promo -> setFabrique($Promo_tab['fabrique']);
        $Promo -> setEtat('encours');
        
        $Formateur_tab = isset($Promo_tab['formateurs'])?$Promo_tab['formateurs']:[];
        foreach ($Formateur_tab as $key => $value) {
            $Formateur = new Formateur();
            if ($value['id'] && ($Formateur =  $formateur_repo -> find($value['id']))) {
                // dd($Formateur);
                $Promo -> addFormateur($Formateur);
            }
        }
        // dd($Promo);

        $Groupe_tab = isset($Promo_tab['groupes'])?$Promo_tab['groupes']:[];
        if (empty($Groupe_tab)) {
            return $this -> json(["message" => "Il faut au moins un groupe à la création de promo"],Response::HTTP_FORBIDDEN);
        }
        
        foreach ($Groupe_tab as $key => $value) {
            $Groupe = new Groupe();
            $Groupe -> setNom($value['nom']);
            $Groupe -> setDateCreation(new \DateTime());
            $Groupe -> setStatut('actif');
            $Groupe -> setType($value['type']);
            if (isset($value['apprenants'])) {
                foreach ($value['apprenants'] as $key => $val) {
                    $Apprenant = new Apprenant();
                    if ($Apprenant = $apprenant_repo -> findOneByEmail($val['email'])) {

                        $message = (new \Swift_Message('Séléctions Sonatel Academy'))
                            ->setFrom('usernameAdmin@gmail.com')
                            ->setTo($Apprenant -> getEmail())
                            ->setBody('Bonjour cher(e) '. $Apprenant -> getPrenom() .' '. $Apprenant -> getNom() .' 
                            Felicitations!!! vous avez été séléctionné(e) suite à votre test d entré à la Sonatel Academy.
                            Veillez utiliser ces informations pour vous connecter à votre Promo. username: '. $Apprenant -> getUsername() .' 
                            password: '. $Apprenant -> getPassword() .' A bientot.')
                        ;

                        //$mailer->send($message);
                        $Groupe -> addApprenant($Apprenant);
                    }
                }
            }
            
            if (isset($value['formateurs'])) {
                foreach ($value['formateurs'] as $key => $val) {
                    $Formateur = new Formateur();
                    if ($Formateur = $formateur_repo -> find($val['id'])) {
                        $Groupe -> addFormateur($Formateur);
                    }
                }
            }

            $Promo -> addGroupe($Groupe);
            
        }
        

        if (!$this -> isGranted("ROLE_FORMATEUR",$Promo)) {
            return $this -> json(["message" => "Cette action vous est interdite"],Response::HTTP_FORBIDDEN);
        }

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $Promo -> setUser($user);

        $errors = $validator->validate($Promo);
        if (count($errors)){
            $errors = $serializer->serialize($errors,"json");
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }
        
        dd($Promo);
        $manager->persist($Promo);
        $manager->flush();
        return $this->json($Promo,Response::HTTP_CREATED);
    }


    /**
     * @Route("/promo", name="promo")
     */
    public function index()
    {
        return $this->render('promo/index.html.twig', [
            'controller_name' => 'PromoController',
        ]);
    }
}
