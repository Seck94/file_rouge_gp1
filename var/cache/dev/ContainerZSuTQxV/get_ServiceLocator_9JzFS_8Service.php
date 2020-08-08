<?php

namespace ContainerZSuTQxV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9JzFS_8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9JzFS.8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9JzFS.8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::getAdmin' => ['privates', '.service_locator.RTUGCCW', 'get_ServiceLocator_RTUGCCWService', true],
            'App\\Controller\\AdminController::getAdminById' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\ApprenantController::addApprenant' => ['privates', '.service_locator.r5pch1I', 'get_ServiceLocator_R5pch1IService', true],
            'App\\Controller\\ApprenantController::getApprenant' => ['privates', '.service_locator.RTUGCCW', 'get_ServiceLocator_RTUGCCWService', true],
            'App\\Controller\\ApprenantController::getApprenantById' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\CompetenceController::addCompetence' => ['privates', '.service_locator.bk_JP9I', 'get_ServiceLocator_BkJP9IService', true],
            'App\\Controller\\CompetenceController::showCompetence' => ['privates', '.service_locator.EFPYbVF', 'get_ServiceLocator_EFPYbVFService', true],
            'App\\Controller\\CompetenceController::updateCompetence' => ['privates', '.service_locator.ihUGo0D', 'get_ServiceLocator_IhUGo0DService', true],
            'App\\Controller\\FormateurController::addFormateur' => ['privates', '.service_locator.r5pch1I', 'get_ServiceLocator_R5pch1IService', true],
            'App\\Controller\\FormateurController::getFormateur' => ['privates', '.service_locator.RTUGCCW', 'get_ServiceLocator_RTUGCCWService', true],
            'App\\Controller\\FormateurController::getFormateurById' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\GroupecompetenceController::addGroupecompetence' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\GroupecompetenceController::showGroupecompetence' => ['privates', '.service_locator.lRLL0n8', 'get_ServiceLocator_LRLL0n8Service', true],
            'App\\Controller\\GroupecompetenceController::updateGroupecompetence' => ['privates', '.service_locator.o5eLPbk', 'get_ServiceLocator_O5eLPbkService', true],
            'App\\Controller\\UserController::addUser' => ['privates', '.service_locator.r5pch1I', 'get_ServiceLocator_R5pch1IService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\AdminController:getAdmin' => ['privates', '.service_locator.RTUGCCW', 'get_ServiceLocator_RTUGCCWService', true],
            'App\\Controller\\AdminController:getAdminById' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\ApprenantController:addApprenant' => ['privates', '.service_locator.r5pch1I', 'get_ServiceLocator_R5pch1IService', true],
            'App\\Controller\\ApprenantController:getApprenant' => ['privates', '.service_locator.RTUGCCW', 'get_ServiceLocator_RTUGCCWService', true],
            'App\\Controller\\ApprenantController:getApprenantById' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\CompetenceController:addCompetence' => ['privates', '.service_locator.bk_JP9I', 'get_ServiceLocator_BkJP9IService', true],
            'App\\Controller\\CompetenceController:showCompetence' => ['privates', '.service_locator.EFPYbVF', 'get_ServiceLocator_EFPYbVFService', true],
            'App\\Controller\\CompetenceController:updateCompetence' => ['privates', '.service_locator.ihUGo0D', 'get_ServiceLocator_IhUGo0DService', true],
            'App\\Controller\\FormateurController:addFormateur' => ['privates', '.service_locator.r5pch1I', 'get_ServiceLocator_R5pch1IService', true],
            'App\\Controller\\FormateurController:getFormateur' => ['privates', '.service_locator.RTUGCCW', 'get_ServiceLocator_RTUGCCWService', true],
            'App\\Controller\\FormateurController:getFormateurById' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\GroupecompetenceController:addGroupecompetence' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\GroupecompetenceController:showGroupecompetence' => ['privates', '.service_locator.lRLL0n8', 'get_ServiceLocator_LRLL0n8Service', true],
            'App\\Controller\\GroupecompetenceController:updateGroupecompetence' => ['privates', '.service_locator.o5eLPbk', 'get_ServiceLocator_O5eLPbkService', true],
            'App\\Controller\\UserController:addUser' => ['privates', '.service_locator.r5pch1I', 'get_ServiceLocator_R5pch1IService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\AdminController::getAdmin' => '?',
            'App\\Controller\\AdminController::getAdminById' => '?',
            'App\\Controller\\ApprenantController::addApprenant' => '?',
            'App\\Controller\\ApprenantController::getApprenant' => '?',
            'App\\Controller\\ApprenantController::getApprenantById' => '?',
            'App\\Controller\\CompetenceController::addCompetence' => '?',
            'App\\Controller\\CompetenceController::showCompetence' => '?',
            'App\\Controller\\CompetenceController::updateCompetence' => '?',
            'App\\Controller\\FormateurController::addFormateur' => '?',
            'App\\Controller\\FormateurController::getFormateur' => '?',
            'App\\Controller\\FormateurController::getFormateurById' => '?',
            'App\\Controller\\GroupecompetenceController::addGroupecompetence' => '?',
            'App\\Controller\\GroupecompetenceController::showGroupecompetence' => '?',
            'App\\Controller\\GroupecompetenceController::updateGroupecompetence' => '?',
            'App\\Controller\\UserController::addUser' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:getAdmin' => '?',
            'App\\Controller\\AdminController:getAdminById' => '?',
            'App\\Controller\\ApprenantController:addApprenant' => '?',
            'App\\Controller\\ApprenantController:getApprenant' => '?',
            'App\\Controller\\ApprenantController:getApprenantById' => '?',
            'App\\Controller\\CompetenceController:addCompetence' => '?',
            'App\\Controller\\CompetenceController:showCompetence' => '?',
            'App\\Controller\\CompetenceController:updateCompetence' => '?',
            'App\\Controller\\FormateurController:addFormateur' => '?',
            'App\\Controller\\FormateurController:getFormateur' => '?',
            'App\\Controller\\FormateurController:getFormateurById' => '?',
            'App\\Controller\\GroupecompetenceController:addGroupecompetence' => '?',
            'App\\Controller\\GroupecompetenceController:showGroupecompetence' => '?',
            'App\\Controller\\GroupecompetenceController:updateGroupecompetence' => '?',
            'App\\Controller\\UserController:addUser' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
