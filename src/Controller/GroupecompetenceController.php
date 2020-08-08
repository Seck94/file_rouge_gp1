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
        $Groupecompetence_json = $request -> getContent();

        $Groupecompetence_tab = $serializer -> decode($Groupecompetence_json,"json");
        $Groupecompetence = new Groupecompetence();
        $Groupecompetence -> setLibelle($Groupecompetence_tab['libelle']);
        $Groupecompetence -> setDescriptif($Groupecompetence_tab['descriptif']);
        $Competence_tab = $Groupecompetence_tab['competence'];
        foreach ($Competence_tab as $key => $value) {
            $competence = new Competence();
            $competence -> setLibelle($value['libelle']);
            $Groupecompetence -> addCompetence($competence);
        }
        if (!$this -> isGranted("EDIT",$Groupecompetence)) {
            return $this -> json(["message" => "Cette action vous est interdite"],Response::HTTP_FORBIDDEN);
        }

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $Groupecompetence -> setUser($user);

        $errors = $validator->validate($Groupecompetence);
        if (count($errors)){
            $errors = $serializer->serialize($errors,"json");
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }
        
        $manager->persist($Groupecompetence);
        $manager->flush();
        return $this->json($Groupecompetence,Response::HTTP_CREATED);
    }



    /**
     * @Route(
     *     path="/api/admin/groupecompetences/{id}",
     *     methods={"PUT","PATCH"},
     *     defaults={
     *          "__controller"="App\Controller\GroupecompetenceController::updateGroupecompetence",
     *          "__api_resource_class"=Groupecompetence::class,
     *          "__api_collection_operation_name"="update_groupecompetence"
     *     }
     * )
    */
    public function updateGroupecompetence(Request $request,SerializerInterface $serializer,ValidatorInterface $validator,EntityManagerInterface $manager, $id, CompetenceRepository $cmp, GroupecompetenceRepository $grpcmp)
    {
        $Groupecompetence_json = $request -> getContent();
        $Groupecompetence_tab = $serializer -> decode($Groupecompetence_json,"json");
        $Groupecompetence = new Groupecompetence();
        if (!($Groupecompetence = $grpcmp -> find($id))) {
            return $this ->json(null, Response::HTTP_NOT_FOUND,);
        }
        if (isset($Groupecompetence_tab['libelle'])) {
            $Groupecompetence -> setLibelle($Groupecompetence_tab['libelle']);
        }
        if (isset($Groupecompetence_tab['descriptif'])) {
            $Groupecompetence -> setDescriptif($Groupecompetence_tab['descriptif']);
        }
        $Competence_tab = isset($Groupecompetence_tab['competence'])?$Groupecompetence_tab['competence']:[];
        if (!empty($Competence_tab)) {
            foreach ($Competence_tab as $key => $value) {
                $competence = new Competence();
                if (isset($value['id'])) 
                {
                    if (!($competence =  $cmp -> find($value['id']))) {
                        return $this ->json(null, Response::HTTP_NOT_FOUND,);
                    }
                    if (isset($value['libelle'])) {
                        $competence -> setLibelle($value['libelle']);
                    }
                    else {
                        $Groupecompetence -> removeCompetence($competence);
                    }
                }
                elseif(isset($value['libelle'])) {
                    $competence -> setLibelle($value['libelle']);
                    $Groupecompetence -> addCompetence($competence);
                }
            }
        }
        
        if (!$this -> isGranted("EDIT",$Groupecompetence)) {
            return $this -> json(["message" => "Cette action vous est interdite"],Response::HTTP_FORBIDDEN);
        }

        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($Groupecompetence -> getUser() !== $user ) {
            return $this -> json(["message" => "Vous n'avez pas crée ce groupe de competence"],Response::HTTP_FORBIDDEN);
        }

        $errors = $validator->validate($Groupecompetence);
        if (count($errors)){
            $errors = $serializer->serialize($errors,"json");
            return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
        }
        
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
        if (!$this -> isGranted("ROLE_CM",$Groupecompetence)) {
            return $this -> json(["message" => "l'accès à cette ressource est interdite"],Response::HTTP_FORBIDDEN);
        }
        $Groupecompetence = $Groupecompetence -> findAll();
        // dd($Groupecompetence[0]->getUser());
        return $this -> json($Groupecompetence, Response::HTTP_OK,);
    }
}