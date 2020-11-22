<?php

namespace ContainerVdK9iUj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WP8DzP4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wP8DzP4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wP8DzP4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'brief' => ['privates', 'App\\Repository\\BriefRepository', 'getBriefRepositoryService', true],
            'groupe' => ['privates', 'App\\Repository\\GroupeRepository', 'getGroupeRepositoryService', true],
            'livrableattendu' => ['privates', 'App\\Repository\\LivrableAttenduRepository', 'getLivrableAttenduRepositoryService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'niveaux' => ['privates', 'App\\Repository\\NiveauRepository', 'getNiveauRepositoryService', true],
            'promo' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
            'ress' => ['privates', 'App\\Repository\\RessourceRepository', 'getRessourceRepositoryService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'tags' => ['privates', 'App\\Repository\\TagRepository', 'getTagRepositoryService', true],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'brief' => 'App\\Repository\\BriefRepository',
            'groupe' => 'App\\Repository\\GroupeRepository',
            'livrableattendu' => 'App\\Repository\\LivrableAttenduRepository',
            'manager' => '?',
            'niveaux' => 'App\\Repository\\NiveauRepository',
            'promo' => 'App\\Repository\\PromoRepository',
            'ress' => 'App\\Repository\\RessourceRepository',
            'serializer' => '?',
            'tags' => 'App\\Repository\\TagRepository',
            'validator' => '?',
        ]);
    }
}
