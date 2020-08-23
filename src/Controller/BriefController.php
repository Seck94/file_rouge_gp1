<?php

namespace App\Controller;

use App\Entity\Brief;
use App\Repository\BriefRepository;
use App\Repository\PromoRepository;
use App\Repository\GroupeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BriefController extends AbstractController
{


    /**
    * @Route(
    *     name="brief_formateur",
    *     path="api/formateur/briefs",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\BriefController::brief_formateur",
    *         "_api_resource_class"=Brief::class,
    *         "_api_collection_operation_name"="brief_formateur"
    *     }
    * )
    */
    public function brief_formateur(){
        if ($this->get('security.token_storage')->getToken()->getUser() -> getRoles()[0] !== "ROLE_FORMATEUR") {
            return $this -> json("Vous n'etes pas formateur...", Response::HTTP_FORBIDDEN);
        }
        $briefs = $this->get('security.token_storage')->getToken()->getUser() -> getBriefs();
        $result = [];
        foreach ($briefs as $key => $brief) {
            $result[]['brief'] = $brief;
        }
        return $this -> json($result, Response::HTTP_OK);
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
        if (!$groupe = $groupe_repo -> find($idg)) {
            return $this -> json("Groupe introuvable", Response::HTTP_NOT_FOUND);
        }
        $groupe_promo = $promo -> getGroupes();
        foreach ($groupe_promo as $key => $value) {
            if ($value -> getId() === $groupe -> getId()) {
                foreach ($value -> getFormateurs() as $key => $formateur) {
                    if ($formateur === $this->get('security.token_storage')->getToken()->getUser()) {
                        $result = [];
                        $briefs = $value -> getBriefs();
                        foreach ($briefs as $key => $brief) {
                            $result[] = $brief;
                        }
                        return $this -> json($result, Response::HTTP_OK);
                    }
                }
                return $this -> json("Vous n'estes pas de ce groupe", Response::HTTP_FORBIDDEN);
            }
        }
        return $this -> json("Verifiez les données entrées", Response::HTTP_NOT_FOUND);
    }

    /**
    * @Route(
    *     name="promo_id_brief",
    *     path="api/formateur/promos/{id}/briefs",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\BriefController::promo_id_briefs",
    *         "_api_resource_class"=Brief::class,
    *         "_api_collection_operation_name"="promo_id_brief"
    *     }
    * )
    */
    public function promo_id_briefs(PromoRepository $promo_repo, $id){
        if (!$promo = $promo_repo -> find($id)) {
            return $this -> json("Promo introuvable", Response::HTTP_NOT_FOUND);
        }

        foreach ($promo -> getPromoBriefs() as $key => $value) {
            $briefs[] = $value -> getBrief();
        }

        return isset($briefs)?$this -> json($briefs, Response::HTTP_OK):"Pas encore de brief pour cette promo";
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
