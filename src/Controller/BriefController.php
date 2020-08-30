<?php

namespace App\Controller;

use App\Entity\Brief;
use App\Repository\UserRepository;
use App\Repository\BriefRepository;
use App\Repository\PromoRepository;
use App\Repository\GroupeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BriefController extends AbstractController
{


    /**
    * @Route(
    *     name="all_briefs",
    *     path="api/formateur/briefs",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\BriefController::brief_formateur",
    *         "_api_resource_class"=Brief::class,
    *         "_api_collection_operation_name"="all_briefs"
    *     }
    * )
    */
    public function brief_formateur(BriefRepository $briefs){
        if ($this->get('security.token_storage')->getToken()->getUser() -> getRoles()[0] !== "ROLE_FORMATEUR") {
            return $this -> json("Vous n'etes pas formateur...", Response::HTTP_FORBIDDEN);
        }
        return $briefs -> findAll();
    }



    /**
    * @Route(
    *     name="brief_groupe_promo",
    *     path="api/formateur/promos/{idp}/groupes/{idg}/briefs",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\BriefController::briefs_groupe_promo",
    *         "_api_resource_class"=Brief::class,
    *         "_api_collection_operation_name"="brief_groupe_promo"
    *     }
    * )
    */
    public function briefs_groupe_promo(PromoRepository $promo_repo, GroupeRepository $groupe_repo, $idp, $idg){
        if (!$promo = $promo_repo -> find($idp)) {
            return $this -> json("Promo introuvable", Response::HTTP_NOT_FOUND);
        }
        if (!$groupe_a_rechercher = $groupe_repo -> find($idg)) {
            return $this -> json("Groupe introuvable", Response::HTTP_NOT_FOUND);
        }
        $result = [];
        foreach ($promo -> getGroupes() as $key => $groupe) {
            if ($groupe -> getId() === $groupe_a_rechercher -> getId()) {
                foreach ($groupe -> getBriefs() as $key => $brief) {
                    foreach ($brief -> getGroupes() as $key => $groupe) {
                        if ($groupe -> getStatut() !== 'encours') {
                            $brief -> removeGroupe($groupe);
                        }
                    }
                }
                $result[] = $brief;
            }
        }
        return $result;
    }

    /**
    * @Route(
    *     name="brief_promo",
    *     path="api/formateurs/promos/{idp}/briefs/{id}",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\BriefController::brief_promo",
    *         "_api_resource_class"=Brief::class,
    *         "_api_item_operation_name"="brief_promo"
    *     }
    * )
    */
    public function brief_promo(PromoRepository $promo_repo, BriefRepository $brief_repo, $idp, $id){
        
        if (!$promo = $promo_repo -> find($idp)) {
            return $this -> json("Promo introuvable", Response::HTTP_NOT_FOUND);
        }
        if (!$brief = $brief_repo -> find($id)) {
            return $this -> json("Brief introuvable", Response::HTTP_NOT_FOUND);
        }
        if (!$this -> isGranted("VIEW",$brief)) {
            return $this -> json(["message" => "Cette action vous est interdite"],Response::HTTP_FORBIDDEN);
        }
        foreach ($brief -> getPromoBriefs() as $key => $promobrief) {
            if ($promobrief -> getPromo() === $promo) {
                return $this -> json($brief,Response::HTTP_OK,);
            }
        }
        return $this -> json("Brief introuvable dans cette promo", Response::HTTP_NOT_FOUND);
    }


    /**
    * @Route(
    *     name="promo_id_brief",
    *     path="api/formateurs/promos/{idp}/briefs",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\App\Controller\BriefController::promo_id_briefs",
    *         "_api_resource_class"=Brief::class,
    *         "_api_collection_operation_name"="promo_id_brief"
    *     }
    * )
    */
    public function promo_id_briefs(PromoRepository $promo_repo, $idp){
        if (!$promo = $promo_repo -> find($idp)) {
            return $this -> json("Promo introuvable", Response::HTTP_NOT_FOUND);
        }
        $briefs =[];
        foreach ($promo -> getPromoBriefs() as $key => $promobrief) {
            $brief = $promobrief -> getBrief();
            foreach ( $brief -> getGroupes() as $key => $groupe) {
                if ($groupe -> getStatut() !== 'encours') {
                    $brief -> removeGroupe($groupe);
                }
            }
            $briefs[] = $brief;
        }
        return $briefs;
    }


    /**
    * @Route(
    *     name="promo_apprenant_brief",
    *     path="api/apprenants/promos/{id}/briefs",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\BriefController::promo_apprenant_brief",
    *         "_api_resource_class"=Brief::class,
    *         "_api_collection_operation_name"="promo_apprenant_brief"
    *     }
    * )
    */
    public function promo_apprenant_brief(PromoRepository $promo_repo, $id){
        if (!$promo = $promo_repo -> find($id)) {
            return $this -> json("Promo introuvable", Response::HTTP_NOT_FOUND);
        }
        $briefs =[];
        foreach ($promo -> getGroupes() as $key => $groupe) {
            foreach ($groupe -> getBriefs() as $key => $brief) {
                if (!in_array($brief,$briefs)) {
                    foreach ( $brief -> getGroupes() as $key => $groupe) {
                        if ($groupe -> getStatut() !== 'encours') {
                            $brief -> removeGroupe($groupe);
                        }
                    }
                    $briefs[] = $brief;
                }
            }
            
        }
        return $briefs;
    }


    /**
    * @Route(
    *     name="apprenant_promo_brief",
    *     path="api/apprenants/promos/{idp}/briefs/{idb}",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\App\Controller\BriefController::apprenant_promo_brief",
    *         "_api_resource_class"=Brief::class,
    *         "_api_collection_operation_name"="apprenant_promo_brief"
    *     }
    * )
    */
    public function apprenant_promo_brief(PromoRepository $promo_repo, BriefRepository $brief_repo, $idp, $idb){
        
        if (!$promo = $promo_repo -> find($idp)) {
            return $this -> json("Promo introuvable", Response::HTTP_NOT_FOUND);
        }
        if (!$brief = $brief_repo -> find($idb)) {
            return $this -> json("Brief introuvable", Response::HTTP_NOT_FOUND);
        }
        if (!$this -> isGranted("VIEW_APPRENANT",$brief)) {
            return $this -> json(["message" => "Cette action vous est interdite"],Response::HTTP_FORBIDDEN);
        }
        foreach ($brief -> getPromoBriefs() as $key => $promobrief) {
            if ($promobrief -> getPromo() === $promo) {
                return $brief;
            }
        }
        return $this -> json("infos incorrectes", Response::HTTP_NOT_FOUND);
    }


    /**
    * @Route(
    *     name="briefs_brouillon",
    *     path="api/formateur/briefs/brouillons",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\BriefController::briefs_brouillon",
    *         "_api_resource_class"=Brief::class,
    *         "_api_collection_operation_name"="briefs_brouillon"
    *     }
    * )
    */
    public function briefs_brouillon(){
        if ($this->get('security.token_storage')->getToken()->getUser() -> getRoles()[0] !== "ROLE_FORMATEUR") {
            return $this -> json("Vous n'etes pas formateur...", Response::HTTP_FORBIDDEN);
        }
        $briefs = $this->get('security.token_storage')->getToken()->getUser() -> getBriefs();
        $result = [];
        foreach ($briefs as $key => $brief) {
            if ($brief -> getstatut() === 'brouillon') {
                $result[] = $brief;
            }
        }
        return !empty($result) ? $result : $this -> json("Vous n'avez aucun brief brouillon", Response::HTTP_NOT_FOUND);
    }

    /**
    * @Route(
    *     name="briefs_valide",
    *     path="api/formateur/briefs/valides",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\BriefController::briefs_valide",
    *         "_api_resource_class"=Brief::class,
    *         "_api_collection_operation_name"="briefs_valide"
    *     }
    * )
    */
    public function briefs_valide(){
        if ($this->get('security.token_storage')->getToken()->getUser() -> getRoles()[0] !== "ROLE_FORMATEUR") {
            return $this -> json("Vous n'etes pas formateur...", Response::HTTP_FORBIDDEN);
        }
        $briefs = $this->get('security.token_storage')->getToken()->getUser() -> getBriefs();
        $result = [];
        foreach ($briefs as $key => $brief) {
            if ($brief -> getstatut() === 'valide') {
                $result[] = $brf;
            }
        }
        return !empty($result) ? $result : $this -> json("Vous n'avez aucun brief validé", Response::HTTP_NOT_FOUND);
    }


    /**
     * @Route("/brief", name="brief")
     */
    public function index()
    {
        return $this->render('brief/index.html.twig', [
            'controller_name' => 'BriefController',
        ]);
    }
}
