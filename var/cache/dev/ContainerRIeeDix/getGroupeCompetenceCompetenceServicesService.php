<?php

namespace ContainerRIeeDix;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupeCompetenceCompetenceServicesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\GroupeCompetenceCompetenceServices' shared autowired service.
     *
     * @return \App\Services\GroupeCompetenceCompetenceServices
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/GroupeCompetenceCompetenceServices.php';

        return $container->privates['App\\Services\\GroupeCompetenceCompetenceServices'] = new \App\Services\GroupeCompetenceCompetenceServices();
    }
}
