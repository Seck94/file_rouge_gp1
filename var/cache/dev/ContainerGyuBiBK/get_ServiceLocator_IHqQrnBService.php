<?php

namespace ContainerGyuBiBK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IHqQrnBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IHqQrnB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IHqQrnB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'apprenant_repo' => ['privates', 'App\\Repository\\ApprenantRepository', 'getApprenantRepositoryService', true],
            'formateur_repo' => ['privates', 'App\\Repository\\FormateurRepository', 'getFormateurRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'promo_repo' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'apprenant_repo' => 'App\\Repository\\ApprenantRepository',
            'formateur_repo' => 'App\\Repository\\FormateurRepository',
            'manager' => '?',
            'promo_repo' => 'App\\Repository\\PromoRepository',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
