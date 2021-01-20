<?php

namespace ContainerYRGs9UI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YjA0jg1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YjA0jg1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YjA0jg1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'profilsortierepo' => ['privates', 'App\\Repository\\ProfilsortieRepository', 'getProfilsortieRepositoryService', true],
            'repopromo' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
        ], [
            'profilsortierepo' => 'App\\Repository\\ProfilsortieRepository',
            'repopromo' => 'App\\Repository\\PromoRepository',
        ]);
    }
}
