<?php

namespace ContainerYRGs9UI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SGhc_N2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SGhc.n2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SGhc.n2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'apprenant_repo' => ['privates', 'App\\Repository\\ApprenantRepository', 'getApprenantRepositoryService', true],
            'filDeDiscussion_repo' => ['privates', 'App\\Repository\\FilDeDiscussionRepository', 'getFilDeDiscussionRepositoryService', true],
            'promo_repo' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'apprenant_repo' => 'App\\Repository\\ApprenantRepository',
            'filDeDiscussion_repo' => 'App\\Repository\\FilDeDiscussionRepository',
            'promo_repo' => 'App\\Repository\\PromoRepository',
            'serializer' => '?',
        ]);
    }
}
