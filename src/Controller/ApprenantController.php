<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Controller\ApprenantController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApprenantController extends AbstractController
{
    /**
    * @Route(
    *     name="apprenant_liste",
    *     path="api/apprenants",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\ApprenantController::getApprenant",
    *         "_api_resource_class"=User::class,
    *         "_api_collection_operation_name"="get_apprenants"
    *     }
    * )
    */
    public function getApprenant(UserRepository $repo){
        $apprenant = $repo -> findByProfil("APPRENANT");
        return $this -> json($apprenant, Response::HTTP_OK,);
    }
    
    /**
    * @Route(
    *     name="apprenant_find",
    *     path="api/apprenants/{id}",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\ApprenantController::getApprenantById",
    *         "_api_resource_class"=User::class,
    *         "_api_collection_operation_name"="get_apprenant"
    *     }
    * )
    */
    public function getApprenantById(UserRepository $repo, SerializerInterface $serializer, $id){
        $user = $repo -> find($id);
        $role = $user -> getRoles();
        if ($role[0] == "ROLE_APPRENANT") {
            $user = $serializer -> serialize($user,"json");
            return $this -> json($user, Response::HTTP_OK,);
        }
        else{
            return $this ->json(null, Response::HTTP_NOT_FOUND,);
        }
    }

    public function index()
    {
        return $this->render('apprenant/index.html.twig', [
            'controller_name' => 'ApprenantController',
        ]);
    }
}