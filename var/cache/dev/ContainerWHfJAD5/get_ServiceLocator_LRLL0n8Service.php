<?php

namespace ContainerWHfJAD5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LRLL0n8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lRLL0n8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lRLL0n8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Groupecompetence' => ['privates', 'App\\Repository\\GroupecompetenceRepository', 'getGroupecompetenceRepositoryService', true],
        ], [
            'Groupecompetence' => 'App\\Repository\\GroupecompetenceRepository',
        ]);
    }
}
