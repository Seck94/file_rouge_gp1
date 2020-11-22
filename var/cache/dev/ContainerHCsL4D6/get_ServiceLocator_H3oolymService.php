<?php

namespace ContainerHCsL4D6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H3oolymService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H3oolym' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H3oolym'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'brief' => ['privates', 'App\\Repository\\BriefRepository', 'getBriefRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'brief' => 'App\\Repository\\BriefRepository',
            'manager' => '?',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
