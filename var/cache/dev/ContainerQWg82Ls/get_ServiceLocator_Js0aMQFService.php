<?php

namespace ContainerQWg82Ls;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Js0aMQFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Js0aMQF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Js0aMQF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'brief_repo' => ['privates', 'App\\Repository\\BriefRepository', 'getBriefRepositoryService', true],
            'promo_repo' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
        ], [
            'brief_repo' => 'App\\Repository\\BriefRepository',
            'promo_repo' => 'App\\Repository\\PromoRepository',
        ]);
    }
}
