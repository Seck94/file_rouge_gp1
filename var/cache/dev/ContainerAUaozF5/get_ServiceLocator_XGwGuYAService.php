<?php

namespace ContainerAUaozF5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XGwGuYAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XGwGuYA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XGwGuYA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::getAdmin' => ['privates', '.service_locator.RTUGCCW', 'get_ServiceLocator_RTUGCCWService', true],
            'App\\Controller\\AdminController::getAdminById' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\ApprenantController::addApprenant' => ['privates', '.service_locator.r5pch1I', 'get_ServiceLocator_R5pch1IService', true],
            'App\\Controller\\ApprenantController::getApprenant' => ['privates', '.service_locator.RTUGCCW', 'get_ServiceLocator_RTUGCCWService', true],
            'App\\Controller\\ApprenantController::getApprenantById' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\BriefController::briefs_groupe_promo' => ['privates', '.service_locator.X_yNDnk', 'get_ServiceLocator_XYNDnkService', true],
            'App\\Controller\\BriefController::promo_id_briefs' => ['privates', '.service_locator.LMeZ5AJ', 'get_ServiceLocator_LMeZ5AJService', true],
            'App\\Controller\\CompetenceController::addCompetence' => ['privates', '.service_locator.bk_JP9I', 'get_ServiceLocator_BkJP9IService', true],
            'App\\Controller\\CompetenceController::showCompetence' => ['privates', '.service_locator.EFPYbVF', 'get_ServiceLocator_EFPYbVFService', true],
            'App\\Controller\\CompetenceController::updateCompetence' => ['privates', '.service_locator.ihUGo0D', 'get_ServiceLocator_IhUGo0DService', true],
            'App\\Controller\\FormateurController::addFormateur' => ['privates', '.service_locator.r5pch1I', 'get_ServiceLocator_R5pch1IService', true],
            'App\\Controller\\FormateurController::getFormateur' => ['privates', '.service_locator.RTUGCCW', 'get_ServiceLocator_RTUGCCWService', true],
            'App\\Controller\\FormateurController::getFormateurById' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\GroupeController::addGroupe' => ['privates', '.service_locator.IHqQrnB', 'get_ServiceLocator_IHqQrnBService', true],
            'App\\Controller\\GroupeController::updateGroupe' => ['privates', '.service_locator.AZQEEXx', 'get_ServiceLocator_AZQEEXxService', true],
            'App\\Controller\\GroupecompetenceController::addGroupecompetence' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\GroupecompetenceController::showGroupecompetence' => ['privates', '.service_locator.lRLL0n8', 'get_ServiceLocator_LRLL0n8Service', true],
            'App\\Controller\\GroupecompetenceController::updateGroupecompetence' => ['privates', '.service_locator.o5eLPbk', 'get_ServiceLocator_O5eLPbkService', true],
            'App\\Controller\\GroupetagController::addGroupetag' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\GroupetagController::showGroupetag' => ['privates', '.service_locator..q_d43b', 'get_ServiceLocator__QD43bService', true],
            'App\\Controller\\GroupetagController::updateGroupetag' => ['privates', '.service_locator.HbDiaSm', 'get_ServiceLocator_HbDiaSmService', true],
            'App\\Controller\\PromoController::addPromo' => ['privates', '.service_locator.Ti2hqA7', 'get_ServiceLocator_Ti2hqA7Service', true],
            'App\\Controller\\PromoController::apprenantEnAttente' => ['privates', '.service_locator.LMeZ5AJ', 'get_ServiceLocator_LMeZ5AJService', true],
            'App\\Controller\\PromoController::gerer_apprenant' => ['privates', '.service_locator.gxtjAT3', 'get_ServiceLocator_GxtjAT3Service', true],
            'App\\Controller\\PromoController::gerer_formateur' => ['privates', '.service_locator.Tmk7PJz', 'get_ServiceLocator_Tmk7PJzService', true],
            'App\\Controller\\PromoController::gerer_groupe' => ['privates', '.service_locator.Avd2yhl', 'get_ServiceLocator_Avd2yhlService', true],
            'App\\Controller\\PromoController::promo_gp_principal' => ['privates', '.service_locator.X_yNDnk', 'get_ServiceLocator_XYNDnkService', true],
            'App\\Controller\\PromoController::promo_id_gp_principal' => ['privates', '.service_locator.LMeZ5AJ', 'get_ServiceLocator_LMeZ5AJService', true],
            'App\\Controller\\PromoController::updatePromo' => ['privates', '.service_locator.1F.SJ.0', 'get_ServiceLocator_1F_SJ_0Service', true],
            'App\\Controller\\ReferentielController::addReferentiel' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\ReferentielController::showReferentiel' => ['privates', '.service_locator.M3HL8pi', 'get_ServiceLocator_M3HL8piService', true],
            'App\\Controller\\ReferentielController::updateReferentiel' => ['privates', '.service_locator.Fw7pQz3', 'get_ServiceLocator_Fw7pQz3Service', true],
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
            'App\\Controller\\BriefController:briefs_groupe_promo' => ['privates', '.service_locator.X_yNDnk', 'get_ServiceLocator_XYNDnkService', true],
            'App\\Controller\\BriefController:promo_id_briefs' => ['privates', '.service_locator.LMeZ5AJ', 'get_ServiceLocator_LMeZ5AJService', true],
            'App\\Controller\\CompetenceController:addCompetence' => ['privates', '.service_locator.bk_JP9I', 'get_ServiceLocator_BkJP9IService', true],
            'App\\Controller\\CompetenceController:showCompetence' => ['privates', '.service_locator.EFPYbVF', 'get_ServiceLocator_EFPYbVFService', true],
            'App\\Controller\\CompetenceController:updateCompetence' => ['privates', '.service_locator.ihUGo0D', 'get_ServiceLocator_IhUGo0DService', true],
            'App\\Controller\\FormateurController:addFormateur' => ['privates', '.service_locator.r5pch1I', 'get_ServiceLocator_R5pch1IService', true],
            'App\\Controller\\FormateurController:getFormateur' => ['privates', '.service_locator.RTUGCCW', 'get_ServiceLocator_RTUGCCWService', true],
            'App\\Controller\\FormateurController:getFormateurById' => ['privates', '.service_locator.olU6qez', 'get_ServiceLocator_OlU6qezService', true],
            'App\\Controller\\GroupeController:addGroupe' => ['privates', '.service_locator.IHqQrnB', 'get_ServiceLocator_IHqQrnBService', true],
            'App\\Controller\\GroupeController:updateGroupe' => ['privates', '.service_locator.AZQEEXx', 'get_ServiceLocator_AZQEEXxService', true],
            'App\\Controller\\GroupecompetenceController:addGroupecompetence' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\GroupecompetenceController:showGroupecompetence' => ['privates', '.service_locator.lRLL0n8', 'get_ServiceLocator_LRLL0n8Service', true],
            'App\\Controller\\GroupecompetenceController:updateGroupecompetence' => ['privates', '.service_locator.o5eLPbk', 'get_ServiceLocator_O5eLPbkService', true],
            'App\\Controller\\GroupetagController:addGroupetag' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\GroupetagController:showGroupetag' => ['privates', '.service_locator..q_d43b', 'get_ServiceLocator__QD43bService', true],
            'App\\Controller\\GroupetagController:updateGroupetag' => ['privates', '.service_locator.HbDiaSm', 'get_ServiceLocator_HbDiaSmService', true],
            'App\\Controller\\PromoController:addPromo' => ['privates', '.service_locator.Ti2hqA7', 'get_ServiceLocator_Ti2hqA7Service', true],
            'App\\Controller\\PromoController:apprenantEnAttente' => ['privates', '.service_locator.LMeZ5AJ', 'get_ServiceLocator_LMeZ5AJService', true],
            'App\\Controller\\PromoController:gerer_apprenant' => ['privates', '.service_locator.gxtjAT3', 'get_ServiceLocator_GxtjAT3Service', true],
            'App\\Controller\\PromoController:gerer_formateur' => ['privates', '.service_locator.Tmk7PJz', 'get_ServiceLocator_Tmk7PJzService', true],
            'App\\Controller\\PromoController:gerer_groupe' => ['privates', '.service_locator.Avd2yhl', 'get_ServiceLocator_Avd2yhlService', true],
            'App\\Controller\\PromoController:promo_gp_principal' => ['privates', '.service_locator.X_yNDnk', 'get_ServiceLocator_XYNDnkService', true],
            'App\\Controller\\PromoController:promo_id_gp_principal' => ['privates', '.service_locator.LMeZ5AJ', 'get_ServiceLocator_LMeZ5AJService', true],
            'App\\Controller\\PromoController:updatePromo' => ['privates', '.service_locator.1F.SJ.0', 'get_ServiceLocator_1F_SJ_0Service', true],
            'App\\Controller\\ReferentielController:addReferentiel' => ['privates', '.service_locator.19ps0qC', 'get_ServiceLocator_19ps0qCService', true],
            'App\\Controller\\ReferentielController:showReferentiel' => ['privates', '.service_locator.M3HL8pi', 'get_ServiceLocator_M3HL8piService', true],
            'App\\Controller\\ReferentielController:updateReferentiel' => ['privates', '.service_locator.Fw7pQz3', 'get_ServiceLocator_Fw7pQz3Service', true],
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
            'App\\Controller\\BriefController::briefs_groupe_promo' => '?',
            'App\\Controller\\BriefController::promo_id_briefs' => '?',
            'App\\Controller\\CompetenceController::addCompetence' => '?',
            'App\\Controller\\CompetenceController::showCompetence' => '?',
            'App\\Controller\\CompetenceController::updateCompetence' => '?',
            'App\\Controller\\FormateurController::addFormateur' => '?',
            'App\\Controller\\FormateurController::getFormateur' => '?',
            'App\\Controller\\FormateurController::getFormateurById' => '?',
            'App\\Controller\\GroupeController::addGroupe' => '?',
            'App\\Controller\\GroupeController::updateGroupe' => '?',
            'App\\Controller\\GroupecompetenceController::addGroupecompetence' => '?',
            'App\\Controller\\GroupecompetenceController::showGroupecompetence' => '?',
            'App\\Controller\\GroupecompetenceController::updateGroupecompetence' => '?',
            'App\\Controller\\GroupetagController::addGroupetag' => '?',
            'App\\Controller\\GroupetagController::showGroupetag' => '?',
            'App\\Controller\\GroupetagController::updateGroupetag' => '?',
            'App\\Controller\\PromoController::addPromo' => '?',
            'App\\Controller\\PromoController::apprenantEnAttente' => '?',
            'App\\Controller\\PromoController::gerer_apprenant' => '?',
            'App\\Controller\\PromoController::gerer_formateur' => '?',
            'App\\Controller\\PromoController::gerer_groupe' => '?',
            'App\\Controller\\PromoController::promo_gp_principal' => '?',
            'App\\Controller\\PromoController::promo_id_gp_principal' => '?',
            'App\\Controller\\PromoController::updatePromo' => '?',
            'App\\Controller\\ReferentielController::addReferentiel' => '?',
            'App\\Controller\\ReferentielController::showReferentiel' => '?',
            'App\\Controller\\ReferentielController::updateReferentiel' => '?',
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
            'App\\Controller\\BriefController:briefs_groupe_promo' => '?',
            'App\\Controller\\BriefController:promo_id_briefs' => '?',
            'App\\Controller\\CompetenceController:addCompetence' => '?',
            'App\\Controller\\CompetenceController:showCompetence' => '?',
            'App\\Controller\\CompetenceController:updateCompetence' => '?',
            'App\\Controller\\FormateurController:addFormateur' => '?',
            'App\\Controller\\FormateurController:getFormateur' => '?',
            'App\\Controller\\FormateurController:getFormateurById' => '?',
            'App\\Controller\\GroupeController:addGroupe' => '?',
            'App\\Controller\\GroupeController:updateGroupe' => '?',
            'App\\Controller\\GroupecompetenceController:addGroupecompetence' => '?',
            'App\\Controller\\GroupecompetenceController:showGroupecompetence' => '?',
            'App\\Controller\\GroupecompetenceController:updateGroupecompetence' => '?',
            'App\\Controller\\GroupetagController:addGroupetag' => '?',
            'App\\Controller\\GroupetagController:showGroupetag' => '?',
            'App\\Controller\\GroupetagController:updateGroupetag' => '?',
            'App\\Controller\\PromoController:addPromo' => '?',
            'App\\Controller\\PromoController:apprenantEnAttente' => '?',
            'App\\Controller\\PromoController:gerer_apprenant' => '?',
            'App\\Controller\\PromoController:gerer_formateur' => '?',
            'App\\Controller\\PromoController:gerer_groupe' => '?',
            'App\\Controller\\PromoController:promo_gp_principal' => '?',
            'App\\Controller\\PromoController:promo_id_gp_principal' => '?',
            'App\\Controller\\PromoController:updatePromo' => '?',
            'App\\Controller\\ReferentielController:addReferentiel' => '?',
            'App\\Controller\\ReferentielController:showReferentiel' => '?',
            'App\\Controller\\ReferentielController:updateReferentiel' => '?',
            'App\\Controller\\UserController:addUser' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
