<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
    * @Route(
    *     
    *     path="api/admins",
      *   name="admin_liste",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\AdminController::getAdmin",
    *         "_api_resource_class"=User::class,
    *         "_api_collection_operation_name"="get_admins"
    *     }
    * )
    */
    public function getAdmin(UserRepository $repo){
        $admin = $repo -> findByProfil("ADMIN");
        return $this -> json($admin, Response::HTTP_OK,);
    }

    /**
    * @Route(
    *     name="admin_find",
    *     path="api/admins/{id}",
    *     methods={"GET"},
    *     defaults={
    *         "_controller"="\app\Controller\AdminController::getAdminById",
    *         "_api_resource_class"=User::class,
    *         "_api_collection_operation_name"="get_admin"
    *     }
    * )
    */
    public function getAdminById(UserRepository $repo,SerializerInterface $serializer, $id)
    
    {
        $admin=$repo->find($id);
        $role = $admin->getRoles();
        if($role[0]=="ROLE_ADMIN")
        {
            $admin = $serializer->serialize($admin,"json");
            return $this -> json($admin, Response::HTTP_OK,);
               
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