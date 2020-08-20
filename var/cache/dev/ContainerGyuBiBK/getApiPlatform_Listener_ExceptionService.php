<?php

namespace ContainerGyuBiBK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_ExceptionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.exception' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/ExceptionListener.php';

        return $container->privates['api_platform.listener.exception'] = new \ApiPlatform\Core\EventListener\ExceptionListener('api_platform.action.exception', ($container->privates['monolog.logger.request'] ?? $container->getMonolog_Logger_RequestService()), false, ($container->privates['exception_listener'] ?? $container->getExceptionListenerService()));
    }
}
