<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Controller\ApprenantController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormateurController extends AbstractController
{
    /**
    * @Route(
    *     name="formateur_liste",
    *     path="api/formateurs",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\FormateurController::getFormateur",
    *         "_api_resource_class"=User::class,
    *         "_api_collection_operation_name"="get_formateurs"
    *     }
    * )
    */
    public function getFormateur(UserRepository $repo){
        $formateur = $repo -> findByProfil("FORMATEUR");
        return $this -> json($formateur, Response::HTTP_OK,);
    }

    /**
    * @Route(
    *     name="formateur_find",
    *     path="api/formateurs/{id}",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\FormateurController::getFormateurById",
    *         "_api_resource_class"=User::class,
    *         "_api_collection_operation_name"="get_formateur"
    *     }
    * )
    */
    public function getFormateurById(UserRepository $repo,SerializerInterface $serializer, $id){
        $formateur = $repo->find($id);
        $role = $formateur->getRoles();
        if($role[0]=="ROLE_FORMATEUR")
        {
            $apprenant = $serializer->serialize($formateur,"json");
            return $this -> json($apprenant, Response::HTTP_OK,);
               
        }
        else
        {
            return $this ->json(null, Response::HTTP_NOT_FOUND,);
        }
 
        
        }
    
    public function index()
    {
        return $this->render('apprenant/index.html.twig', [
            'controller_name' => 'FormateurController',
        ]);
    }
}