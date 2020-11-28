<?php

namespace   App\Services;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class UserServices{

    public function setCommonProperties($request, $encoder, $serializer, $validator, $profil,$manager, $id=null){
                
        $user = $request->request->all();
        $role = $profil -> find($user["profil_id"]);
        $avatar = $request->files->get("avatar");
        $avatar = fopen($avatar->getRealPath(),"rb");
        $user["avatar"] = $avatar;
        $actor = $role -> getLibelle() !== "CM" ? ucfirst(strtolower($role -> getLibelle())):"CM";
        $user = $serializer->denormalize($user,"App\\Entity\\".$actor);
        $errors = $validator->validate($user);
        if (count($errors)){
            $errors = $serializer->serialize($errors,"json");
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }
        $user -> setProfil($role);
        $password = $user->getPassword();
        $user->setPassword($encoder->encodePassword($user,$password));
        if ($id && $existedUser = $manager -> getRepository(User::class) -> find($id) ) {
            $existedUser -> setNom($user->getNom());
            $existedUser -> setPrenom($user->getPrenom());
            $existedUser -> setUsername($user->getUsername());
            $existedUser -> setPassword($user->getPassword());
            $existedUser -> setEmail($user->getEmail());
            $existedUser -> setProfil($user->getProfil());
            $existedUser -> setAvatar($user->getAvatar());
            $manager ->flush();
            $res = $existedUser;
        }
        else {
            $manager ->persist($user);
            $manager ->flush();
            $res = $user;
        }
        fclose($avatar);
        return $res;
    }
}