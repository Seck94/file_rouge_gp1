<?php

namespace ContainerBxydy7n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OlU6qezService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.olU6qez' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.olU6qez'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'repo' => 'App\\Repository\\UserRepository',
            'serializer' => '?',
        ]);
    }
}
