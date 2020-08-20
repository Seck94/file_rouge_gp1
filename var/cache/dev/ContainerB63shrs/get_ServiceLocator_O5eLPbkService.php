<?php

namespace ContainerB63shrs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O5eLPbkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o5eLPbk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o5eLPbk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cmp' => ['privates', 'App\\Repository\\CompetenceRepository', 'getCompetenceRepositoryService', true],
            'grpcmp' => ['privates', 'App\\Repository\\GroupecompetenceRepository', 'getGroupecompetenceRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'cmp' => 'App\\Repository\\CompetenceRepository',
            'grpcmp' => 'App\\Repository\\GroupecompetenceRepository',
            'manager' => '?',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
