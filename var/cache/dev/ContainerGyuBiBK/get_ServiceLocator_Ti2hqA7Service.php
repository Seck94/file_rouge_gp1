<?php

namespace ContainerGyuBiBK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ti2hqA7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ti2hqA7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ti2hqA7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'apprenant_repo' => ['privates', 'App\\Repository\\ApprenantRepository', 'getApprenantRepositoryService', true],
            'formateur_repo' => ['privates', 'App\\Repository\\FormateurRepository', 'getFormateurRepositoryService', true],
            'mailer' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'profil_repo' => ['privates', 'App\\Repository\\ProfilRepository', 'getProfilRepositoryService', true],
            'ref_repo' => ['privates', 'App\\Repository\\ReferentielRepository', 'getReferentielRepositoryService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'user_repo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'validator' => ['services', 'validator', 'getValidatorService', false],
        ], [
            'apprenant_repo' => 'App\\Repository\\ApprenantRepository',
            'formateur_repo' => 'App\\Repository\\FormateurRepository',
            'mailer' => '?',
            'manager' => '?',
            'profil_repo' => 'App\\Repository\\ProfilRepository',
            'ref_repo' => 'App\\Repository\\ReferentielRepository',
            'serializer' => '?',
            'user_repo' => 'App\\Repository\\UserRepository',
            'validator' => '?',
        ]);
    }
}
