<?php

namespace ContainerWUh58xL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M3HL8piService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.M3HL8pi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M3HL8pi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Referentiel' => ['privates', 'App\\Repository\\ReferentielRepository', 'getReferentielRepositoryService', true],
        ], [
            'Referentiel' => 'App\\Repository\\ReferentielRepository',
        ]);
    }
}