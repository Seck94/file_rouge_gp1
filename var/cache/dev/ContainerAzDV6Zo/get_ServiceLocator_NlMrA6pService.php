<?php

namespace ContainerAzDV6Zo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NlMrA6pService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NlMrA6p' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NlMrA6p'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cmp' => ['privates', 'App\\Repository\\GroupecompetenceRepository', 'getGroupecompetenceRepositoryService', true],
            'grpcmp' => ['privates', 'App\\Repository\\ReferentielRepository', 'getReferentielRepositoryService', true],
            'grpcmpService' => ['privates', 'App\\Services\\GroupeCompetenceCompetenceServices', 'getGroupeCompetenceCompetenceServicesService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'cmp' => 'App\\Repository\\GroupecompetenceRepository',
            'grpcmp' => 'App\\Repository\\ReferentielRepository',
            'grpcmpService' => 'App\\Services\\GroupeCompetenceCompetenceServices',
            'manager' => '?',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
