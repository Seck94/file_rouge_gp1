<?php

namespace ContainerHCsL4D6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupetagVoterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.voter.App\Security\Voter\GroupetagVoter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/Voter.php';
        include_once \dirname(__DIR__, 4).'/src/Security/Voter/GroupetagVoter.php';

        return $container->privates['debug.security.voter.App\\Security\\Voter\\GroupetagVoter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \App\Security\Voter\GroupetagVoter(), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
