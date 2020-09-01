<?php

namespace ContainerRYNkeIk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7TeimA8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7TeimA8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7TeimA8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'briefs' => ['privates', 'App\\Repository\\BriefRepository', 'getBriefRepositoryService', true],
        ], [
            'briefs' => 'App\\Repository\\BriefRepository',
        ]);
    }
}