<?php

namespace ContainerGyuBiBK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReferentielControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ReferentielController' shared autowired service.
     *
     * @return \App\Controller\ReferentielController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ReferentielController.php';

        $container->services['App\\Controller\\ReferentielController'] = $instance = new \App\Controller\ReferentielController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ReferentielController', $container));

        return $instance;
    }
}
