<?php

namespace ContainerHCsL4D6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupetagControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GroupetagController' shared autowired service.
     *
     * @return \App\Controller\GroupetagController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/GroupetagController.php';

        $container->services['App\\Controller\\GroupetagController'] = $instance = new \App\Controller\GroupetagController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\GroupetagController', $container));

        return $instance;
    }
}
