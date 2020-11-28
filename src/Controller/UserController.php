<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Profil;
use App\Services\UserServices;
use App\Repository\ProfilRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route(
     *     path="/api/admin/users",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\UserController::addUser",
     *          "__api_resource_class"=User::class,
     *          "__api_collection_operation_name"="add_user"
     *     }
     * )
    */
    public function addUser(Request $request,UserServices $userService, UserPasswordEncoderInterface $encoder,SerializerInterface $serializer,ValidatorInterface $validator,ProfilRepository $profil,EntityManagerInterface $manager)
    {
        // try {
            return $this->json($userService -> setCommonProperties($request, $encoder, $serializer, $validator, $profil,$manager),Response::HTTP_CREATED);
        // } catch (\Throwable $th) {
        //     return $this -> json("Erreur ".$e,Response::HTTP_BAD_REQUEST);
        // }
    }
    
    
     /**
     * @Route(
     *     path="/api/admin/users/{id}",
     *     methods={"PUT"},
     *     defaults={
     *          "__controller"="App\Controller\UserController::UpdateUser",
     *          "__api_resource_class"=User::class,
     *          "__api_item_operation_name"="update_user"
     *     }
     * )
    */
    public function UpdateUser(Request $request,UserServices $userService, UserPasswordEncoderInterface $encoder,SerializerInterface $serializer,ValidatorInterface $validator,ProfilRepository $profil,EntityManagerInterface $manager, $id)
    {
        // dd($this -> getUser());//l'utilisateur connecté
        // try {
            return $this->json($userService -> setCommonProperties($request, $encoder, $serializer, $validator, $profil,$manager, $id),Response::HTTP_CREATED,[],[]);
        // } catch (\Throwable $e) {
        //     return $this -> json("Erreur ".$e,Response::HTTP_BAD_REQUEST);
        // }
    }
}
