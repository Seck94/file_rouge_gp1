<?php

namespace App\Controller;

use App\Entity\Niveau;
use DateTimeInterface;
use App\Entity\LivrablePartiel;
use App\Repository\NiveauRepository;
use App\Repository\PromoBriefRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PromoBriefController extends AbstractController
{


     /**
    * @Route(
    *     path="api/formateurs/promo/{id}/brief/{num}/livrablePartiels",
    *     methods={"PUT"}
    * )
    */
    public function putPromoBriefs(PromoBriefRepository $repo, Request $request, SerializerInterface $serializer , $id, $num, NiveauRepository $repniveau, EntityManagerInterface $manager){
        $livrable_json = $request -> getContent();
        $livrable_tab = $serializer -> decode($livrable_json,"json");
        $promobrief = $repo -> findOneBy (["promo" => $id, "brief" => $num]);
        foreach ($livrable_tab["livrablePartiels"] as $key => $value) {
            $livrable = new LivrablePartiel();
            $livrable -> setLibelle ($value["libelle"]);
            $livrable -> setDescription ($value["description"]);
            $livrable -> setDelai (new \DateTime ($value["delai"]));
            $livrable -> setDateCreation (new \DateTime ($value["dateCreation"]));
            $livrable -> setType ($value["type"]);
            foreach ($value["niveaux"] as $val) {
                
               $niveau = $repniveau -> find($val);
               $livrable -> addNiveau ($niveau);
            }
            $promobrief -> addLivrablesPartiel($livrable);
            $manager -> persist($livrable);
            
        }
            $manager -> persist($promobrief);
            $manager -> flush();
            return $this->json($promobrief,Response::HTTP_CREATED);

    }


    /**
     * @Route("/promo/brief", name="promo_brief")
     */
    public function index()
    {
        return $this->render('promo_brief/index.html.twig', [
            'controller_name' => 'PromoBriefController',
        ]);
    }
}
