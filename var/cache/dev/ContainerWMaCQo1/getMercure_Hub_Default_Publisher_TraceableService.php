<?php

namespace ContainerWMaCQo1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMercure_Hub_Default_Publisher_TraceableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'mercure.hub.default.publisher.traceable' shared service.
     *
     * @return \Symfony\Component\Mercure\Debug\TraceablePublisher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/PublisherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/Debug/TraceablePublisher.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/Publisher.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mercure/src/Jwt/StaticJwtProvider.php';

        return $container->privates['mercure.hub.default.publisher.traceable'] = new \Symfony\Component\Mercure\Debug\TraceablePublisher(new \Symfony\Component\Mercure\Publisher($container->getEnv('MERCURE_PUBLISH_URL'), new \Symfony\Component\Mercure\Jwt\StaticJwtProvider($container->getEnv('MERCURE_JWT_TOKEN')), ($container->privates['http_client'] ?? $container->load('getHttpClientService'))), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }
}
