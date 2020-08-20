<?php

namespace ContainerZQFEh4t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XYNDnkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.X_yNDnk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.X_yNDnk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'groupe_repo' => ['privates', 'App\\Repository\\GroupeRepository', 'getGroupeRepositoryService', true],
            'promo_repo' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
        ], [
            'groupe_repo' => 'App\\Repository\\GroupeRepository',
            'promo_repo' => 'App\\Repository\\PromoRepository',
        ]);
    }
}
