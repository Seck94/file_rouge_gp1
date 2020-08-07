<?php

namespace ContainerMxnI203;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EFPYbVFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EFPYbVF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EFPYbVF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Competence' => ['privates', 'App\\Repository\\CompetenceRepository', 'getCompetenceRepositoryService', true],
        ], [
            'Competence' => 'App\\Repository\\CompetenceRepository',
        ]);
    }
}
