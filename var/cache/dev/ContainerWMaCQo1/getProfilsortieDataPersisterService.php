<?php

namespace ContainerWMaCQo1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfilsortieDataPersisterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\ProfilsortieDataPersister' shared autowired service.
     *
     * @return \App\DataPersister\ProfilsortieDataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataPersister/ProfilsortieDataPersister.php';

        return $container->privates['App\\DataPersister\\ProfilsortieDataPersister'] = new \App\DataPersister\ProfilsortieDataPersister(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}