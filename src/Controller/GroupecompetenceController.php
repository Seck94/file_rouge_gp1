<?php

namespace App\Controller;

use App\Entity\Competence;
use App\Entity\Groupecompetence;
use App\Repository\CompetenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\GroupecompetenceRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;


class GroupecompetenceController extends AbstractController
{
    /**
     * @Route(
     *     path="/api/admin/groupecompetences",
     *     methods={"POST"},
     *     defaults={
     *          "__controller"="App\Controller\GroupecompetenceController::addGroupecompetence",
     *          "__api_resource_class"=Groupecompetence::class,
     *          "__api_collection_operation_name"="add_groupecompetence"
     *     }
     * )
    */
    public function addGroupecompetence(Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager)
    {
        $Groupecompetence = $request->request->all();
        $Groupecompetence = $serializer->denormalize($Groupecompetence,"App\Entity\Groupecompetence");

        if (!$this -> isGranted("EDIT",$Groupecompetence)) {
            return $this -> json(["message" => "Cette action vous est interdite"],Response::HTTP_FORBIDDEN);
        }

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $Groupecompetence -> setUser($user);
        dd($Groupecompetence);

        $errors = $validator->validate($Groupecompetence);
        if (count($errors)){
            $errors = $serializer->serialize($errors,"json");
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }
        $Competence = new Competence();
        $Competence -> setLibelle("realiser une bdd");
        // $Groupecompetence -> addCompetence($Competence);
        
        $manager->persist($Groupecompetence);
        $manager->flush();
        return $this->json($Groupecompetence,Response::HTTP_CREATED);
    }


    /**
     * @Route(
     *     path="/api/admin/groupecompetences",
     *     methods={"GET"},
     *     defaults={
     *          "__controller"="App\Controller\GroupecompetenceController::showGroupecompetence",
     *          "__api_resource_class"=Groupecompetence::class,
     *          "__api_collection_operation_name"="show_groupecompetence"
     *     }
     * )
    */
    public function showGroupecompetence(GroupecompetenceRepository $Groupecompetence){
        $Groupecompetence = $Groupecompetence -> findAll();
        // dd($Groupecompetence);
        return $this -> json($Groupecompetence, Response::HTTP_OK,);
    }
}
