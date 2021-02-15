<?php

namespace ContainerAzDV6Zo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ah_Hjw9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ah.Hjw9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ah.Hjw9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'grptag_repo' => ['privates', 'App\\Repository\\GroupetagRepository', 'getGroupetagRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'tag_rep' => ['privates', 'App\\Repository\\TagRepository', 'getTagRepositoryService', true],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'grptag_repo' => 'App\\Repository\\GroupetagRepository',
            'manager' => '?',
            'serializer' => '?',
            'tag_rep' => 'App\\Repository\\TagRepository',
            'validator' => '?',
        ]);
    }
}
