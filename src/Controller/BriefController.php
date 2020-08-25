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
    public function brief_formateur(BriefRepository $briefs){
        if ($this->get('security.token_storage')->getToken()->getUser() -> getRoles()[0] !== "ROLE_FORMATEUR") {
            return $this -> json("Vous n'etes pas formateur...", Response::HTTP_FORBIDDEN);
        }
        foreach ($briefs -> findAll() as $key => $brief) {
            $brf['id'] = $brief -> getId();
            $brf['titre'] = $brief -> getTitre();
            foreach ($brief -> getLivrableAttendus() as $key => $livrableAttendu) {
                $livAtt['id'] = $livrableAttendu -> getId();
                $livAtt['libelle'] = $livrableAttendu -> getLibelle();
                $brf['livrables Attendus'][] = $livAtt;
            }
            foreach ($brief -> getNiveaux() as $key => $niveau) {
                $niv['id'] = $niveau -> getId();
                $niv['libelle'] = $niveau -> getLibelle();
                $niv['competence']['id'] = $niveau -> getCompetence() -> getId();
                $niv['competence']['libelle'] = $niveau -> getCompetence() -> getLibelle();
                $brf['niveaux'][] = $niv;
            }
            foreach ($brief -> getTags() as $key => $tag) {
                $tg['id'] = $tag -> getId();
                $tg['libelle'] = $tag -> getLibelle();
                $brf['tags'][] = $tg;
            }
            foreach ($brief -> getRessources() as $key => $ressource) {
                $rsrce['id'] = $ressource -> getId();
                $rsrce['titre'] = $ressource -> getTitre();
                $rsrce['url'] = $ressource -> getUrl();
                $rsrce['pj'] = $ressource -> getPj();
                $brf['ressources'][] = $rsrce;
            }
            $result[] = $brf;
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
        if (!$groupe_a_rechercher = $groupe_repo -> find($idg)) {
            return $this -> json("Groupe introuvable", Response::HTTP_NOT_FOUND);
        }
        $result = [];
        foreach ($promo -> getGroupes() as $key => $groupe) {
            if ($groupe -> getId() === $groupe_a_rechercher -> getId()) {
                $briefs = $groupe -> getBriefs();
                foreach ($briefs as $key => $brief) {
                    $brf['id'] = $brief -> getId();
                    $brf['titre'] = $brief -> getTitre();
                    $brf['referentiel']['id'] = $brief -> getreferentiel() -> getId();
                    $brf['referentiel']['libelle'] = $brief -> getReferentiel() -> getLibelle();
                    foreach ($brief -> getLivrableAttendus() as $key => $livrableAttendu) {
                        $livAtt['id'] = $livrableAttendu -> getId();
                        $livAtt['libelle'] = $livrableAttendu -> getLibelle();
                        $brf['livrables Attendus'][] = $livAtt;
                    }
                    foreach ($brief -> getNiveaux() as $key => $niveau) {
                        $niv['id'] = $niveau -> getId();
                        $niv['libelle'] = $niveau -> getLibelle();
                        $niv['competence']['id'] = $niveau -> getCompetence() -> getId();
                        $niv['competence']['libelle'] = $niveau -> getCompetence() -> getLibelle();
                        $brf['niveaux'][] = $niv;
                    }
                    foreach ($brief -> getTags() as $key => $tag) {
                        $tg['id'] = $tag -> getId();
                        $tg['libelle'] = $tag -> getLibelle();
                        $brf['tags'][] = $tg;
                    }
                    foreach ($brief -> getRessources() as $key => $ressource) {
                        $rsrce['id'] = $ressource -> getId();
                        $rsrce['titre'] = $ressource -> getTitre();
                        $rsrce['url'] = $ressource -> getUrl();
                        $rsrce['pj'] = $ressource -> getPj();
                        $brf['ressources'][] = $rsrce;
                    }
                    foreach ($brief -> getGroupes() as $key => $groupe) {
                        if ($groupe -> getStatut() === 'encours') {
                            $grp['id'] = $groupe -> getId();
                            $grp['nom'] = $groupe -> getNom();
                            $grp['statut'] = $groupe -> getStatut();
                            $grp['type'] = $groupe -> getType();
                            $grp['apprenants'] = $groupe -> getApprenants();
                            $brf['groupes'][] = $grp;
                        }
                    }
                    $brf['formateur'][] = $brief -> getFormateur();
                    foreach ($brief -> getPromoBriefs()  as $key => $promobrief) {
                        $prm['id'] = $promobrief -> getPromo() -> getId();
                        $prm['titre'] = $promobrief -> getPromo() -> getTitre();
                        $brf['promos'][] = $prm;
                    }
                    $result[] = $brf;
                }
                return $this -> json($result, Response::HTTP_OK);
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
        $result =[];
        foreach ($promo -> getPromoBriefs() as $key => $promobrief) {
            $brief = $promobrief -> getBrief();
            $brf['id'] = $brief -> getId();
            $brf['titre'] = $brief -> getTitre();
            $brf['referentiel']['id'] = $brief -> getreferentiel() -> getId();
            $brf['referentiel']['libelle'] = $brief -> getReferentiel() -> getLibelle();
            foreach ($brief -> getLivrableAttendus() as $key => $livrableAttendu) {
                $livAtt['id'] = $livrableAttendu -> getId();
                $livAtt['libelle'] = $livrableAttendu -> getLibelle();
                $brf['livrables Attendus'][] = $livAtt;
            }
            foreach ($brief -> getNiveaux() as $key => $niveau) {
                $niv['id'] = $niveau -> getId();
                $niv['libelle'] = $niveau -> getLibelle();
                $niv['competence']['id'] = $niveau -> getCompetence() -> getId();
                $niv['competence']['libelle'] = $niveau -> getCompetence() -> getLibelle();
                $brf['niveaux'][] = $niv;
            }
            foreach ($brief -> getTags() as $key => $tag) {
                $tg['id'] = $tag -> getId();
                $tg['libelle'] = $tag -> getLibelle();
                $brf['tags'][] = $tg;
            }
            foreach ($brief -> getRessources() as $key => $ressource) {
                $rsrce['id'] = $ressource -> getId();
                $rsrce['titre'] = $ressource -> getTitre();
                $rsrce['url'] = $ressource -> getUrl();
                $rsrce['pj'] = $ressource -> getPj();
                $brf['ressources'][] = $rsrce;
            }
            foreach ($brief -> getGroupes() as $key => $groupe) {
                if ($groupe -> getStatut() === 'encours') {
                    $grp['id'] = $groupe -> getId();
                    $grp['nom'] = $groupe -> getNom();
                    $grp['statut'] = $groupe -> getStatut();
                    $grp['type'] = $groupe -> getType();
                    $grp['apprenants'] = $groupe -> getApprenants();
                    $brf['groupes'][] = $grp;
                }
            }
            $brf['formateur'][] = $brief -> getFormateur();
            foreach ($brief -> getPromoBriefs()  as $key => $promobrief) {
                $prm['id'] = $promobrief -> getPromo() -> getId();
                $prm['titre'] = $promobrief -> getPromo() -> getTitre();
                $brf['promos'][] = $prm;
            }
            $result[] = $brf;
        }
        return $this -> json($result, Response::HTTP_OK);
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
                $brf['id'] = $brief -> getId();
                $brf['titre'] = $brief -> getTitre();
                $brf['referentiel']['id'] = $brief -> getreferentiel() -> getId();
                $brf['referentiel']['libelle'] = $brief -> getReferentiel() -> getLibelle();
                foreach ($brief -> getLivrableAttendus() as $key => $livrableAttendu) {
                    $livAtt['id'] = $livrableAttendu -> getId();
                    $livAtt['libelle'] = $livrableAttendu -> getLibelle();
                    $brf['livrables Attendus'][] = $livAtt;
                }
                foreach ($brief -> getNiveaux() as $key => $niveau) {
                    $niv['id'] = $niveau -> getId();
                    $niv['libelle'] = $niveau -> getLibelle();
                    $niv['competence']['id'] = $niveau -> getCompetence() -> getId();
                    $niv['competence']['libelle'] = $niveau -> getCompetence() -> getLibelle();
                    $brf['niveaux'][] = $niv;
                }
                foreach ($brief -> getTags() as $key => $tag) {
                    $tg['id'] = $tag -> getId();
                    $tg['libelle'] = $tag -> getLibelle();
                    $brf['tags'][] = $tg;
                }
                foreach ($brief -> getRessources() as $key => $ressource) {
                    $rsrce['id'] = $ressource -> getId();
                    $rsrce['titre'] = $ressource -> getTitre();
                    $rsrce['url'] = $ressource -> getUrl();
                    $rsrce['pj'] = $ressource -> getPj();
                    $brf['ressources'][] = $rsrce;
                }
                $result[] = $brf;
            }
        }
        return !empty($result) ? $this -> json($result, Response::HTTP_OK) : $this -> json("Vous n'avez aucun brouillon", Response::HTTP_NOT_FOUND);
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
