<?php

namespace ContainerEKpbxNP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7u5EdksService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7u5Edks' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7u5Edks'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'serializer' => ['privates', '.errored.w5bhKrn', NULL, 'Cannot determine controller argument for "App\\Controller\\ApprenantController::getApprenantById()": the $serializer argument is type-hinted with the non-existent class or interface: "App\\Controller\\SerializerInterface". Did you forget to add a use statement?'],
        ], [
            'repo' => 'App\\Repository\\UserRepository',
            'serializer' => '?',
        ]);
    }
}
