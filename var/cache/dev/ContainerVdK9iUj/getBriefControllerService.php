<?php

namespace ContainerVdK9iUj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBriefControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BriefController' shared autowired service.
     *
     * @return \App\Controller\BriefController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BriefController.php';

        $container->services['App\\Controller\\BriefController'] = $instance = new \App\Controller\BriefController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\BriefController', $container));

        return $instance;
    }
}
