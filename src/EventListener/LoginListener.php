<?php

namespace  App\EventListener;

use App\Entity\User;
use DateTimeInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;


class LoginListener{
    private $em;

    public function __construct(EntityManagerInterface $em){
        $this -> em = $em;
    }

    public function onSecurityAuthenticationSuccess(AuthenticationEvent $event){ 
        if (($user = $event -> getAuthenticationToken() -> getUser())) {
            //on peut aussi faire $user = $this -> getuser() qui retourne le user connecté
            $user -> setLastLogin(new \Datetime());
            $this -> em -> persist($user);
            $this -> em -> flush();
        }     
    }
}