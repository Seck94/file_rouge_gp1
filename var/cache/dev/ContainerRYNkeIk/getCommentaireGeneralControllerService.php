<?php

namespace ContainerRYNkeIk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentaireGeneralControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CommentaireGeneralController' shared autowired service.
     *
     * @return \App\Controller\CommentaireGeneralController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CommentaireGeneralController.php';

        $container->services['App\\Controller\\CommentaireGeneralController'] = $instance = new \App\Controller\CommentaireGeneralController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\CommentaireGeneralController', $container));

        return $instance;
    }
}
