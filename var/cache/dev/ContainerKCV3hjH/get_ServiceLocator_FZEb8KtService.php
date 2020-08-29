<?php

namespace ContainerKCV3hjH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FZEb8KtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fZEb8Kt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fZEb8Kt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'livrableattendu' => ['privates', 'App\\Repository\\LivrableAttenduRepository', 'getLivrableAttenduRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'livrableattendu' => 'App\\Repository\\LivrableAttenduRepository',
            'manager' => '?',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
