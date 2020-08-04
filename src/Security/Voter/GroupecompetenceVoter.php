<?php

namespace App\Security\Voter;

use App\Entity\Groupecompetence;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class GroupecompetenceVoter extends Voter
{
    protected function supports($attribute, $subject)
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, ['EDIT', 'VIEW'])
            && $subject instanceof \App\Entity\Groupecompetence;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        /** @var Groupecompetence $subject */
        $user = $token->getUser();
        //dd($user -> getRoles());
        // si l'utilisateur n'est pas connecté, on retourne immédiatement false
        if (!$user instanceof UserInterface) {
            return false;
        }

        // ...l'utilisateur est connecté, on  voit s'il est autorisé à faire cette action...
        switch ($attribute) {
            case 'EDIT':
                return $user -> getRoles()[0] === "ROLE_ADMIN";
                break;
            case 'VIEW':
                return $user -> getRoles()[0] === "ROLE_ADMIN";
                break;
            case 'DELETE':
                if ($subject->getUser() == $user) {
                    return true;
                }
                break;
        }

        return false;
    }
}