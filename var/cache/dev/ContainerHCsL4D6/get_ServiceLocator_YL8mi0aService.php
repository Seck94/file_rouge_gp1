<?php

namespace ContainerHCsL4D6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YL8mi0aService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YL8mi0a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YL8mi0a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'apprenant_repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'brief_repo' => ['privates', 'App\\Repository\\BriefRepository', 'getBriefRepositoryService', true],
            'promo_repo' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'apprenant_repo' => 'App\\Repository\\UserRepository',
            'brief_repo' => 'App\\Repository\\BriefRepository',
            'promo_repo' => 'App\\Repository\\PromoRepository',
            'serializer' => '?',
        ]);
    }
}
