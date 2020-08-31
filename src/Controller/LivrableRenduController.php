<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Repository\LivrableRenduRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LivrableRenduController extends AbstractController
{


      /**
    * @Route(
    *     path="api/apprenants/{id}/livrablepartiels/{num}",
    *     methods={"PUT"}
    * )
    */
   public function putStatut(Request $request,$id,$num,LivrableRenduRepository $repoRendu,SerializerInterface $serializer ,EntityManagerInterface $manager)
   {
       $livrableRendu = $repoRendu -> findOneBy(["apprenant" => $id, "livrablePartiel" => $num]);
       $lRendu_json = $request -> getContent();
       $lRendu_tab = $serializer -> decode($lRendu_json,"json");
       $livrableRendu -> setStatut ($lRendu_tab["statut"]);
       $manager -> persist($livrableRendu);
       $manager -> flush();
       return $this->json($livrableRendu,Response::HTTP_CREATED);
   }


   /**
     * @Route("/livrable/rendu", name="livrable_rendu")
     */
    public function index()
    {
        return $this->render('livrable_rendu/index.html.twig', [
            'controller_name' => 'LivrableRenduController',
        ]);
    }
}
