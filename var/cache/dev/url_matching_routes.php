<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/admins' => [[['_route' => 'admin_liste', '_controller' => 'App\\Controller\\AdminController::getAdmin', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_admins'], null, ['GET' => 0], null, false, false, null]],
        '/api/apprenants' => [[['_route' => 'apprenant_liste', '_controller' => 'App\\Controller\\ApprenantController::getApprenant', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_apprenants'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/apprenants' => [
            [['_route' => 'app_apprenant_addapprenant', '__controller' => 'App\\Controller\\ApprenantController::addApprenant', '__api_resource_class' => 'Apprenant', '__api_collection_operation_name' => 'add_apprenant', '_controller' => 'App\\Controller\\ApprenantController::addApprenant'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_apprenants_add_apprenant_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'add_apprenant'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_apprenants_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/formateur/briefs' => [
            [['_route' => 'all_briefs', '_controller' => 'App\\Controller\\BriefController::brief_formateur', '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'all_briefs'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_brief_addbrief', '__controller' => 'App\\Controller\\BriefController::addBrief', '__api_resource_class' => 'App\\Entity\\Brief', '__api_collection_operation_name' => 'add_briefs', '_controller' => 'App\\Controller\\BriefController::addBrief'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_briefs_all_briefs_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'all_briefs'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_briefs_add_briefs_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'add_briefs'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/formateur/briefs/brouillons' => [[['_route' => 'briefs_brouillon', '_controller' => 'App\\Controller\\BriefController::briefs_brouillon', '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'briefs_brouillon'], null, ['GET' => 0], null, false, false, null]],
        '/api/formateur/briefs/valides' => [[['_route' => 'briefs_valide', '_controller' => 'App\\Controller\\BriefController::briefs_valide', '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'briefs_valide'], null, ['GET' => 0], null, false, false, null]],
        '/brief' => [[['_route' => 'brief', '_controller' => 'App\\Controller\\BriefController::UpdateBrief'], null, null, null, false, false, null]],
        '/commentaire/general' => [[['_route' => 'commentaire_general', '_controller' => 'App\\Controller\\CommentaireGeneralController::index'], null, null, null, false, false, null]],
        '/api/admin/competences' => [
            [['_route' => 'app_competence_addcompetence', '__controller' => 'App\\Controller\\CompetenceController::addCompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'add_competence', '_controller' => 'App\\Controller\\CompetenceController::addCompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_competences_add_competence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'add_competence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_competences_show_competence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_collection_operation_name' => 'show_competence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/Competences' => [[['_route' => 'app_competence_showcompetence', '__controller' => 'App\\Controller\\CompetenceController::showCompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'show_Competence', '_controller' => 'App\\Controller\\CompetenceController::showCompetence'], null, ['GET' => 0], null, false, false, null]],
        '/api/formateurs' => [[['_route' => 'formateur_liste', '_controller' => 'App\\Controller\\FormateurController::getFormateur', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_formateurs'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/formateurs' => [
            [['_route' => 'app_formateur_addformateur', '__controller' => 'App\\Controller\\FormateurController::addFormateur', '__api_resource_class' => 'Formateur', '__api_collection_operation_name' => 'add_formateur', '_controller' => 'App\\Controller\\FormateurController::addFormateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_formateurs_add_formateur_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'add_formateur'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_formateurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/formateur' => [[['_route' => 'formateur', '_controller' => 'App\\Controller\\FormateurController::index'], null, null, null, false, false, null]],
        '/api/admin/groupes' => [
            [['_route' => 'app_groupe_addgroupe', '__controller' => 'App\\Controller\\GroupeController::addGroupe', '__api_resource_class' => 'App\\Entity\\Groupe', '__api_collection_operation_name' => 'add_groupe', '_controller' => 'App\\Controller\\GroupeController::addGroupe'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupes_add_groupe_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'add_groupe'], null, ['POST' => 0], null, false, false, null],
        ],
        '/groupe' => [[['_route' => 'groupe', '_controller' => 'App\\Controller\\GroupeController::index'], null, null, null, false, false, null]],
        '/api/admin/groupecompetences' => [
            [['_route' => 'app_groupecompetence_addgroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::addGroupecompetence', '__api_resource_class' => 'App\\Entity\\Groupecompetence', '__api_collection_operation_name' => 'add_groupecompetence', '_controller' => 'App\\Controller\\GroupecompetenceController::addGroupecompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_groupecompetence_showgroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::showGroupecompetence', '__api_resource_class' => 'App\\Entity\\Groupecompetence', '__api_collection_operation_name' => 'show_groupecompetence', '_controller' => 'App\\Controller\\GroupecompetenceController::showGroupecompetence'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupecompetences_add_groupecompetence_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_collection_operation_name' => 'add_groupecompetence'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupecompetences_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/groupetag' => [[['_route' => 'groupetag', '_controller' => 'App\\Controller\\GroupetagController::index'], null, null, null, false, false, null]],
        '/api/admin/groupetags' => [
            [['_route' => 'app_groupetag_addgroupetag', '__controller' => 'App\\Controller\\GroupetagController::addGroupetag', '__api_resource_class' => 'App\\Entity\\Groupetag', '__api_collection_operation_name' => 'add_groupetags', '_controller' => 'App\\Controller\\GroupetagController::addGroupetag'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_groupetag_showgroupetag', '__controller' => 'App\\Controller\\GroupetagController::showGroupetag', '__api_resource_class' => 'App\\Entity\\Groupetag', '__api_collection_operation_name' => 'show_groupetagss', '_controller' => 'App\\Controller\\GroupetagController::showGroupetag'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupetags_add_groupetags_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_collection_operation_name' => 'add_groupetags'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_groupetags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_groupetags_show_groupetags_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_collection_operation_name' => 'show_groupetags'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/promos' => [
            [['_route' => 'app_promo_addpromo', '__controller' => 'App\\Controller\\PromoController::addPromo', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'add_promo', '_controller' => 'App\\Controller\\PromoController::addPromo'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_promos_add_promo_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'add_promo'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_promos_show_promo_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'show_promo'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/promos/principal' => [[['_route' => 'app_promo_promo_gp_principal', '__controller' => 'App\\Controller\\PromoController::promo_gp_principal', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'promo_gprincipal', '_controller' => 'App\\Controller\\PromoController::promo_gp_principal'], null, ['GET' => 0], null, false, false, null]],
        '/promo' => [[['_route' => 'promo', '_controller' => 'App\\Controller\\PromoController::index'], null, null, null, false, false, null]],
        '/referentiel' => [[['_route' => 'referentiel', '_controller' => 'App\\Controller\\ReferentielController::index'], null, null, null, false, false, null]],
        '/api/admin/referentiels' => [
            [['_route' => 'app_referentiel_addreferentiel', '__controller' => 'App\\Controller\\ReferentielController::addReferentiel', '__api_resource_class' => 'App\\Entity\\Referentiel', '__api_collection_operation_name' => 'add_referentiel', '_controller' => 'App\\Controller\\ReferentielController::addReferentiel'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_add_referentiel_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'add_referentiel'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_referentiels_show_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'show_groupecompetence'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/users' => [
            [['_route' => 'app_user_adduser', '__controller' => 'App\\Controller\\UserController::addUser', '__api_resource_class' => 'App\\Entity\\User', '__api_collection_operation_name' => 'add_user', '_controller' => 'App\\Controller\\UserController::addUser'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_add_user_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'add_user'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/niveaux' => [[['_route' => 'api_niveaux_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null]],
        '/api/admin/profils' => [
            [['_route' => 'api_profils_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profils_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/tags' => [
            [['_route' => 'api_tags_add_groupetags_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'add_groupetags'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_tags_show_tags_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_collection_operation_name' => 'show_tags'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/admin/profilsorties' => [
            [['_route' => 'api_profilsorties_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_collection_operation_name' => 'post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_profilsorties_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_collection_operation_name' => 'get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(?'
                    .'|/(?'
                        .'|a(?'
                            .'|dmin(?'
                                .'|s/([^/]++)(*:74)'
                                .'|/(?'
                                    .'|competences/([^/]++)(*:105)'
                                    .'|groupe(?'
                                        .'|s/([^/]++)(*:132)'
                                        .'|competences/([^/]++)(*:160)'
                                        .'|tags/([^/]++)(*:181)'
                                    .')'
                                    .'|promos/([^/]++)(?'
                                        .'|/(?'
                                            .'|pr(?'
                                                .'|ofilsorties(?'
                                                    .'|(*:231)'
                                                    .'|/([^/]++)(*:248)'
                                                .')'
                                                .'|incipal(*:264)'
                                            .')'
                                            .'|apprenants(?'
                                                .'|/attente(*:294)'
                                                .'|(*:302)'
                                            .')'
                                            .'|formateurs(*:321)'
                                            .'|groupes(*:336)'
                                        .')'
                                        .'|(*:345)'
                                    .')'
                                    .'|referentiels/([^/]++)(*:375)'
                                .')'
                            .')'
                            .'|pprenants/(?'
                                .'|([^/]++)(*:406)'
                                .'|promos/([^/]++)/briefs(?'
                                    .'|(*:439)'
                                    .'|/([^/]++)(*:456)'
                                .')'
                                .'|([^/]++)/groupe/([^/]++)/livrables(*:499)'
                            .')'
                        .')'
                        .'|formateur(?'
                            .'|/(?'
                                .'|promo(?'
                                    .'|s/([^/]++)/groupes/([^/]++)/briefs(*:567)'
                                    .'|/([^/]++)/brief/([^/]++)(?'
                                        .'|/assignation(*:614)'
                                        .'|(*:622)'
                                    .')'
                                .')'
                                .'|briefs/([^/]++)(*:647)'
                            .')'
                            .'|s/(?'
                                .'|promos/([^/]++)/briefs(?'
                                    .'|/([^/]++)(*:695)'
                                    .'|(*:703)'
                                .')'
                                .'|([^/]++)(*:720)'
                            .')'
                        .')'
                        .'|users/promo/([^/]++)/apprenant/([^/]++)/chats(?'
                            .'|(*:778)'
                        .')'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:816)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:847)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:889)'
                                .'|m(?'
                                    .'|mentaire_generals/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:947)'
                                    .')'
                                    .'|petences/([^/]++)/(?'
                                        .'|groupecompetences(?'
                                            .'|(?:\\.([^/]++))?(*:1012)'
                                            .'|/([^/]++)/(?'
                                                .'|user(?:\\.([^/]++))?(*:1053)'
                                                .'|competences(?'
                                                    .'|(?:\\.([^/]++))?(*:1091)'
                                                    .'|/([^/]++)/niveaux(?:\\.([^/]++))?(*:1132)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|niveaux(?:\\.([^/]++))?(*:1166)'
                                    .')'
                                .')'
                            .')'
                            .'|_ms(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1202)'
                                .')'
                                .'|(?:/([^/\\.]++)(?:\\.([^/]++))?)?(*:1243)'
                            .')'
                        .')'
                        .'|niveaux/([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:1290)'
                        .')'
                        .'|users/promo/([^/]++)/apprenant/([^/]++)/chats(?'
                            .'|(*:1348)'
                        .')'
                        .'|a(?'
                            .'|dmin(?'
                                .'|/(?'
                                    .'|apprenants(?'
                                        .'|(?:/([^/]++))?(*:1400)'
                                        .'|/([^/]++)(?'
                                            .'|(*:1421)'
                                        .')'
                                    .')'
                                    .'|users(?'
                                        .'|(?:/(\\d+))?(*:1451)'
                                        .'|/(\\d+)(?'
                                            .'|(*:1469)'
                                        .')'
                                    .')'
                                    .'|pro(?'
                                        .'|fils(?'
                                            .'|/([^/]++)(?'
                                                .'|(*:1505)'
                                            .')'
                                            .'|orties/([^/]++)(?'
                                                .'|(*:1533)'
                                            .')'
                                        .')'
                                        .'|mos/(?'
                                            .'|([^/]++)/profilsorties(?'
                                                .'|(*:1576)'
                                                .'|/([^/]++)(*:1594)'
                                            .')'
                                            .'|principal(*:1613)'
                                            .'|([^/]++)(?'
                                                .'|/(?'
                                                    .'|principal(*:1646)'
                                                    .'|apprenants(?'
                                                        .'|/attente(*:1676)'
                                                        .'|(*:1685)'
                                                    .')'
                                                    .'|referentiel(*:1706)'
                                                    .'|groupes(?'
                                                        .'|/apprenants(*:1736)'
                                                        .'|(*:1745)'
                                                    .')'
                                                    .'|formateurs(?'
                                                        .'|(*:1768)'
                                                    .')'
                                                .')'
                                                .'|(*:1779)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|tags/([^/]++)(?'
                                        .'|(*:1807)'
                                    .')'
                                    .'|groupe(?'
                                        .'|s/(?'
                                            .'|apprenants(*:1841)'
                                            .'|([^/]++)(?'
                                                .'|(*:1861)'
                                            .')'
                                        .')'
                                        .'|competences/(?'
                                            .'|competences(*:1898)'
                                            .'|([^/]++)(?'
                                                .'|(*:1918)'
                                            .')'
                                        .')'
                                        .'|tags/(?'
                                            .'|tags(*:1941)'
                                            .'|([^/]++)(?'
                                                .'|(*:1961)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|competences/([^/]++)(?'
                                        .'|(*:1996)'
                                    .')'
                                    .'|referentiels/(?'
                                        .'|groupecompetences(*:2039)'
                                        .'|([^/]++)(?'
                                            .'|(*:2059)'
                                        .')'
                                    .')'
                                    .'|formateurs(?'
                                        .'|(?:/([^/]++))?(*:2097)'
                                        .'|/([^/]++)(?'
                                            .'|(*:2118)'
                                        .')'
                                    .')'
                                .')'
                                .'|s/(\\d+)(*:2137)'
                            .')'
                            .'|p(?'
                                .'|prenant(?'
                                    .'|s/(?'
                                        .'|(\\d+)(*:2171)'
                                        .'|promos/(?'
                                            .'|([^/]++)/briefs/(\\d+)(*:2211)'
                                            .'|(\\d+)/briefs(*:2232)'
                                        .')'
                                        .'|([^/]++)/groupe/([^/]++)/livrables(*:2276)'
                                    .')'
                                    .'|/([^/]++)/promo/([^/]++)/referentiel/([^/]++)/statistiques/briefs(*:2351)'
                                .')'
                                .'|i/apprenant/([^/]++)/promo/([^/]++)/referentiel/([^/]++)/competences(*:2429)'
                            .')'
                        .')'
                        .'|pro(?'
                            .'|fils(?'
                                .'|/([^/]++)/users(?:\\.([^/]++))?(*:2483)'
                                .'|orties/([^/]++)/apprenants(?:\\.([^/]++))?(*:2533)'
                            .')'
                            .'|mo(?'
                                .'|_briefs(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:2576)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:2615)'
                                    .')'
                                .')'
                                .'|s/([^/]++)/(?'
                                    .'|groupes(?'
                                        .'|(?:\\.([^/]++))?(*:2665)'
                                        .'|/([^/]++)/apprenants(?:\\.([^/]++))?(*:2709)'
                                    .')'
                                    .'|referentiel(?'
                                        .'|(?:\\.([^/]++))?(*:2748)'
                                        .'|/groupecompetences(?'
                                            .'|(?:\\.([^/]++))?(*:2793)'
                                            .'|/([^/]++)/(?'
                                                .'|user(?:\\.([^/]++))?(*:2834)'
                                                .'|competences(?'
                                                    .'|(?:\\.([^/]++))?(*:2872)'
                                                    .'|/([^/]++)/(?'
                                                        .'|groupecompetences(?'
                                                            .'|(?:\\.([^/]++))?(*:2929)'
                                                            .'|/([^/]++)/user(?:\\.([^/]++))?(*:2967)'
                                                        .')'
                                                        .'|niveaux(?:\\.([^/]++))?(*:2999)'
                                                    .')'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|livrable(?'
                            .'|_attendus(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:3057)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:3096)'
                                .')'
                            .')'
                            .'|s(?'
                                .'|(?:\\.([^/]++))?(*:3126)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:3164)'
                                .')'
                            .')'
                        .')'
                        .'|groupe(?'
                            .'|s/([^/]++)/apprenants(?:\\.([^/]++))?(*:3221)'
                            .'|competences/([^/]++)/(?'
                                .'|user(?:\\.([^/]++))?(*:3273)'
                                .'|competences(?'
                                    .'|(?:\\.([^/]++))?(*:3311)'
                                    .'|/([^/]++)/(?'
                                        .'|groupecompetences(?'
                                            .'|(?:\\.([^/]++))?(*:3368)'
                                            .'|/([^/]++)/user(?:\\.([^/]++))?(*:3406)'
                                        .')'
                                        .'|niveaux(?:\\.([^/]++))?(*:3438)'
                                    .')'
                                .')'
                            .')'
                            .'|tags/([^/]++)/tags(?:\\.([^/]++))?(*:3483)'
                        .')'
                        .'|formateur(?'
                            .'|/(?'
                                .'|promo(?'
                                    .'|s/([^/]++)/groupes/(\\d+)/briefs(*:3548)'
                                    .'|/([^/]++)/brief/([^/]++)(*:3581)'
                                .')'
                                .'|briefs(?'
                                    .'|/(?'
                                        .'|brouillons(*:3614)'
                                        .'|valides(*:3630)'
                                    .')'
                                    .'|(?:/([^/]++))?(*:3654)'
                                    .'|/([^/]++)(*:3672)'
                                .')'
                            .')'
                            .'|s/(?'
                                .'|promo(?'
                                    .'|s/(?'
                                        .'|([^/]++)/briefs/(\\d+)(*:3722)'
                                        .'|(\\d+)/briefs(*:3743)'
                                    .')'
                                    .'|/([^/]++)/(?'
                                        .'|brief/([^/]++)/assignation(*:3792)'
                                        .'|referentiel/([^/]++)/(?'
                                            .'|competences(?'
                                                .'|(*:3839)'
                                                .'|/([^/]++)(*:3857)'
                                            .')'
                                            .'|statistiques/competences(*:3891)'
                                        .')'
                                    .')'
                                    .'|_referentiel/competences/([^/]++)(*:3935)'
                                .')'
                                .'|(\\d+)(*:3950)'
                            .')'
                        .')'
                        .'|re(?'
                            .'|ferentiels/([^/]++)/groupecompetences(?'
                                .'|(?:\\.([^/]++))?(*:4021)'
                                .'|/([^/]++)/(?'
                                    .'|user(?:\\.([^/]++))?(*:4062)'
                                    .'|competences(?'
                                        .'|(?:\\.([^/]++))?(*:4100)'
                                        .'|/([^/]++)/(?'
                                            .'|groupecompetences(?'
                                                .'|(?:\\.([^/]++))?(*:4157)'
                                                .'|/([^/]++)/user(?:\\.([^/]++))?(*:4195)'
                                            .')'
                                            .'|niveaux(?:\\.([^/]++))?(*:4227)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|ssources(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:4269)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:4308)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'admin_find', '_controller' => 'App\\Controller\\AdminController::getAdminById', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_admin'], ['id'], ['GET' => 0], null, false, true, null]],
        105 => [[['_route' => 'app_competence_updatecompetence', '__controller' => 'App\\Controller\\CompetenceController::updateCompetence', '__api_resource_class' => 'App\\Entity\\Competence', '__api_collection_operation_name' => 'update_competence', '_controller' => 'App\\Controller\\CompetenceController::updateCompetence'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        132 => [[['_route' => 'app_groupe_updategroupe', '__controller' => 'App\\Controller\\GroupeController::updateGroupe', '__api_resource_class' => 'App\\Entity\\Groupe', '__api_collection_operation_name' => 'update_groupe', '_controller' => 'App\\Controller\\GroupeController::updateGroupe'], ['id'], ['PUT' => 0], null, false, true, null]],
        160 => [[['_route' => 'app_groupecompetence_updategroupecompetence', '__controller' => 'App\\Controller\\GroupecompetenceController::updateGroupecompetence', '__api_resource_class' => 'App\\Entity\\Groupecompetence', '__api_collection_operation_name' => 'update_groupecompetence', '_controller' => 'App\\Controller\\GroupecompetenceController::updateGroupecompetence'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        181 => [[['_route' => 'app_groupetag_updategroupetag', '__controller' => 'App\\Controller\\GroupetagController::updateGroupetag', '__api_resource_class' => 'App\\Entity\\Groupetag', '__api_collection_operation_name' => 'update_Groupetag', '_controller' => 'App\\Controller\\GroupetagController::updateGroupetag'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        231 => [[['_route' => 'app_profilsortie_profilsortie_collection', '__controller' => 'App\\Controller\\ProfilsortieController::profilsortie_collection', '__api_resource_class' => 'Profilsortie', '__api_collection_operation_name' => 'profilsortie_promo', '_controller' => 'App\\Controller\\ProfilsortieController::profilsortie_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        248 => [[['_route' => 'app_profilsortie_profilsortie_item', '__controller' => 'App\\Controller\\ProfilsortieController::profilsortie_item', '__api_resource_class' => 'Profilsortie', '__api_collection_operation_name' => 'profilsortie_item', '_controller' => 'App\\Controller\\ProfilsortieController::profilsortie_item'], ['idp', 'id'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'app_promo_promo_id_gp_principal', '__controller' => 'App\\Controller\\PromoController::promo_id_gp_principal', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'promo_id_gprincipal', '_controller' => 'App\\Controller\\PromoController::promo_id_gp_principal'], ['id'], ['GET' => 0], null, false, false, null]],
        294 => [[['_route' => 'app_promo_apprenantenattente', '__controller' => 'App\\Controller\\PromoController::apprenantEnAttente', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'apprenants_attente', '_controller' => 'App\\Controller\\PromoController::apprenantEnAttente'], ['id'], ['GET' => 0], null, false, false, null]],
        302 => [[['_route' => 'app_promo_gerer_apprenant', '__controller' => 'App\\Controller\\PromoController::gerer_apprenant', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'gerer_apprenants', '_controller' => 'App\\Controller\\PromoController::gerer_apprenant'], ['id'], ['PUT' => 0], null, false, false, null]],
        321 => [[['_route' => 'app_promo_gerer_formateur', '__controller' => 'App\\Controller\\PromoController::gerer_formateur', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'gerer_formateurs', '_controller' => 'App\\Controller\\PromoController::gerer_formateur'], ['id'], ['PUT' => 0], null, false, false, null]],
        336 => [[['_route' => 'app_promo_gerer_groupe', '__controller' => 'App\\Controller\\PromoController::gerer_groupe', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'gerer_groupes', '_controller' => 'App\\Controller\\PromoController::gerer_groupe'], ['id'], ['PUT' => 0], null, false, false, null]],
        345 => [[['_route' => 'app_promo_updatepromo', '__controller' => 'App\\Controller\\PromoController::updatePromo', '__api_resource_class' => 'App\\Entity\\Promo', '__api_collection_operation_name' => 'update_promo', '_controller' => 'App\\Controller\\PromoController::updatePromo'], ['id'], ['PUT' => 0], null, false, true, null]],
        375 => [[['_route' => 'app_referentiel_updatereferentiel', '__controller' => 'App\\Controller\\ReferentielController::updateReferentiel', '__api_resource_class' => 'App\\Entity\\Referentiel', '__api_collection_operation_name' => 'update_referentiel', '_controller' => 'App\\Controller\\ReferentielController::updateReferentiel'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null]],
        406 => [[['_route' => 'apprenant_find', '_controller' => 'App\\Controller\\ApprenantController::getApprenantById', '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        439 => [[['_route' => 'promo_apprenant_brief', '_controller' => 'App\\Controller\\BriefController::promo_apprenant_brief', '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'promo_apprenant_brief'], ['id'], ['GET' => 0], null, false, false, null]],
        456 => [[['_route' => 'apprenant_promo_brief', '_controller' => 'App\\Controller\\BriefController::apprenant_promo_brief', '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'apprenant_promo_brief'], ['idp', 'idb'], ['GET' => 0], null, false, true, null]],
        499 => [[['_route' => 'app_brief_addlivrable', '__controller' => 'App\\Controller\\BriefController::AddLivrable', '__api_resource_class' => 'App\\Entity\\Brief', '__api_collection_operation_name' => 'add_livrable', '_controller' => 'App\\Controller\\BriefController::AddLivrable'], ['idapp', 'idgrp'], ['POST' => 0], null, false, false, null]],
        567 => [[['_route' => 'brief_groupe_promo', '_controller' => 'App\\Controller\\BriefController::briefs_groupe_promo', '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'brief_groupe_promo'], ['idp', 'idg'], ['GET' => 0], null, false, false, null]],
        614 => [[['_route' => 'app_brief_assignationbrief', '__controller' => 'App\\Controller\\BriefController::assignationBrief', '__api_resource_class' => 'App\\Entity\\Brief', '__api_collection_operation_name' => 'assignation_briefs', '_controller' => 'App\\Controller\\BriefController::assignationBrief'], ['idpromo', 'idbrief'], ['GET' => 0], null, false, false, null]],
        622 => [[['_route' => 'app_brief_updatebrief', '__controller' => 'App\\Controller\\BriefController::UpdateBrief', '__api_resource_class' => 'App\\Entity\\Brief', '__api_collection_operation_name' => 'update_briefs', '_controller' => 'App\\Controller\\BriefController::UpdateBrief'], ['idpromo', 'idbrief'], ['PUT' => 0], null, false, true, null]],
        647 => [[['_route' => 'app_brief_dupliquebrief', '__controller' => 'App\\Controller\\BriefController::addBrief', '__api_resource_class' => 'App\\Entity\\Brief', '__api_collection_operation_name' => 'duplique_briefs', '_controller' => 'App\\Controller\\BriefController::dupliqueBrief'], ['id'], ['POST' => 0], null, false, true, null]],
        695 => [[['_route' => 'brief_promo', '_controller' => 'App\\Controller\\BriefController::brief_promo', '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'brief_promo'], ['idp', 'id'], ['GET' => 0], null, false, true, null]],
        703 => [[['_route' => 'promo_id_brief', '_controller' => 'App\\Controller\\BriefController::promo_id_briefs', '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'promo_id_brief'], ['idp'], ['GET' => 0], null, false, false, null]],
        720 => [[['_route' => 'formateur_find', '_controller' => 'App\\Controller\\FormateurController::getFormateurById', '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null]],
        778 => [
            [['_route' => 'app_commentairegeneral_envoyercommentaire', '__controller' => 'App\\Controller\\CommentaireGeneralController::envoyerCommentaire', '__api_resource_class' => 'CommentaireGeneral', '__api_collection_operation_name' => 'add_commentaire', '_controller' => 'App\\Controller\\CommentaireGeneralController::envoyerCommentaire'], ['idp', 'ida'], ['POST' => 0], null, false, false, null],
            [['_route' => 'app_commentairegeneral_affichercommentaire', '__controller' => 'App\\Controller\\CommentaireGeneralController::afficherCommentaire', '__api_resource_class' => 'CommentaireGeneral', '__api_collection_operation_name' => 'get_commentaire', '_controller' => 'App\\Controller\\CommentaireGeneralController::afficherCommentaire'], ['idp', 'ida'], ['GET' => 0], null, false, false, null],
        ],
        816 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        847 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        889 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        947 => [
            [['_route' => 'api_commentaire_generals_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CommentaireGeneral', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_commentaire_generals_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CommentaireGeneral', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_commentaire_generals_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CommentaireGeneral', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_commentaire_generals_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CommentaireGeneral', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1012 => [[['_route' => 'api_competences_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_competences_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetences', 'identifiers' => [['id', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_groupecompetences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1053 => [[['_route' => 'api_competences_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_competences_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_competences_groupecompetences_user_get_subresource']], ['id', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        1091 => [[['_route' => 'api_competences_groupecompetences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_competences_groupecompetences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_competences_groupecompetences_competences_get_subresource']], ['id', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        1132 => [[['_route' => 'api_competences_groupecompetences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_competences_groupecompetences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_groupecompetences_competences_niveaux_get_subresource']], ['id', 'groupecompetences', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        1166 => [[['_route' => 'api_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_competences_niveaux_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1202 => [
            [['_route' => 'api_c_ms_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_c_ms_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1243 => [[['_route' => 'api_c_ms_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CM', '_api_item_operation_name' => 'get', 'id' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1290 => [
            [['_route' => 'api_niveaux_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_niveaux_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1348 => [
            [['_route' => 'api_commentaire_generals_add_commentaire_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CommentaireGeneral', '_api_collection_operation_name' => 'add_commentaire'], ['idp', 'ida'], ['POST' => 0], null, false, false, null],
            [['_route' => 'api_commentaire_generals_get_commentaire_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CommentaireGeneral', '_api_collection_operation_name' => 'get_commentaire'], ['idp', 'ida'], ['GET' => 0], null, false, false, null],
        ],
        1400 => [[['_route' => 'api_apprenants_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        1421 => [
            [['_route' => 'api_apprenants_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_apprenants_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1451 => [[['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        1469 => [
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1505 => [
            [['_route' => 'api_profils_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profils_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_profils_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_profils_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profil', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1533 => [
            [['_route' => 'api_profilsorties_profilsortie_id_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'profilsortie_id'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_profilsorties_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1576 => [[['_route' => 'api_profilsorties_            profilsortie_promo_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_collection_operation_name' => '            profilsortie_promo'], ['id'], ['GET' => 0], null, false, false, null]],
        1594 => [[['_route' => 'api_profilsorties_profilsortie_item_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Profilsortie', '_api_collection_operation_name' => 'profilsortie_item'], ['idp', 'id'], ['GET' => 0], null, false, true, null]],
        1613 => [[['_route' => 'api_promos_promo_gprincipal_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'promo_gprincipal'], [], ['GET' => 0], null, false, false, null]],
        1646 => [[['_route' => 'api_promos_promo_id_gprincipal_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'promo_id_gprincipal'], ['id'], ['GET' => 0], null, false, false, null]],
        1676 => [[['_route' => 'api_promos_apprenants_attente_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'apprenants_attente'], ['id'], ['GET' => 0], null, false, false, null]],
        1685 => [[['_route' => 'api_promos_gerer_apprenants_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'gerer_apprenants'], ['id'], ['PUT' => 0], null, false, false, null]],
        1706 => [[['_route' => 'api_promos_promo_referentiel_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'promo_referentiel'], ['id'], ['GET' => 0], null, false, false, null]],
        1736 => [[['_route' => 'api_promos_promo_groupe_apprenants_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'promo_groupe_apprenants'], ['id'], ['GET' => 0], null, false, false, null]],
        1745 => [[['_route' => 'api_promos_gerer_groupes_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'gerer_groupes'], ['id'], ['PUT' => 0], null, false, false, null]],
        1768 => [
            [['_route' => 'api_promos_promo_groupe_formateurs_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'promo_groupe_formateurs'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_promos_gerer_formateurs_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'gerer_formateurs'], ['id'], ['PUT' => 0], null, false, false, null],
        ],
        1779 => [
            [['_route' => 'api_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promos_update_promo_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'update_promo'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1807 => [
            [['_route' => 'api_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tags_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1841 => [[['_route' => 'api_groupes_show_apprenants_groupe_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_collection_operation_name' => 'show_apprenants_groupe'], [], ['GET' => 0], null, false, false, null]],
        1861 => [
            [['_route' => 'api_groupes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupes_update_groupe_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_item_operation_name' => 'update_groupe'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1898 => [[['_route' => 'api_groupecompetences_show_groupecompetence_competence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_collection_operation_name' => 'show_groupecompetence_competence'], [], ['GET' => 0], null, false, false, null]],
        1918 => [
            [['_route' => 'api_groupecompetences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupecompetences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupecompetences_update_groupecompetence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_item_operation_name' => 'update_groupecompetence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1941 => [[['_route' => 'api_groupetags_show_groupetags_tags_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_collection_operation_name' => 'show_groupetags_tags'], [], ['GET' => 0], null, false, false, null]],
        1961 => [
            [['_route' => 'api_groupetags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_groupetags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_groupetags_updateGroupeGroupetag_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupetag', '_api_item_operation_name' => 'updateGroupeGroupetag'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        1996 => [
            [['_route' => 'api_competences_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_competences_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_competences_update_competence_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_item_operation_name' => 'update_competence'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        2039 => [[['_route' => 'api_referentiels_show_referentiel_groupecompetence_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_collection_operation_name' => 'show_referentiel_groupecompetence'], [], ['GET' => 0], null, false, false, null]],
        2059 => [
            [['_route' => 'api_referentiels_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_referentiels_update_referentiel_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_item_operation_name' => 'update_referentiel'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        2097 => [[['_route' => 'api_formateurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get', 'id' => null], ['id'], ['GET' => 0], null, false, true, null]],
        2118 => [
            [['_route' => 'api_formateurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'patch'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_formateurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        2137 => [[['_route' => 'api_users_get_admin_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get_admin'], ['id'], ['GET' => 0], null, false, true, null]],
        2171 => [[['_route' => 'api_apprenants_get_apprenant_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_item_operation_name' => 'get_apprenant'], ['id'], ['GET' => 0], null, false, true, null]],
        2211 => [[['_route' => 'api_briefs_apprenant_promo_brief_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'apprenant_promo_brief'], ['idp', 'idb'], ['GET' => 0], null, false, true, null]],
        2232 => [[['_route' => 'api_briefs_promo_apprenant_brief_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'promo_apprenant_brief'], ['id'], ['GET' => 0], null, false, false, null]],
        2276 => [[['_route' => 'api_livrables_add_livrable_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Livrable', '_api_collection_operation_name' => 'add_livrable', 'id' => null], ['idapp', 'idgrp'], ['POST' => 0], null, false, false, null]],
        2351 => [[['_route' => 'api_statistiques_competences_apprenant_brief_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\StatistiquesCompetences', '_api_collection_operation_name' => 'apprenant_brief'], ['idAp', 'idPr', 'idRef'], ['GET' => 0], null, false, false, null]],
        2429 => [[['_route' => 'api_statistiques_competences_apprenant_compet_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\StatistiquesCompetences', '_api_collection_operation_name' => 'apprenant_compet'], ['idAp', 'idPr', 'idRef'], ['GET' => 0], null, false, false, null]],
        2483 => [[['_route' => 'api_profils_users_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_profils_users_get_subresource', '_api_subresource_context' => ['property' => 'users', 'identifiers' => [['id', 'App\\Entity\\Profil', true]], 'collection' => true, 'operationId' => 'api_profils_users_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2533 => [[['_route' => 'api_profilsorties_apprenants_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_subresource_operation_name' => 'api_profilsorties_apprenants_get_subresource', '_api_subresource_context' => ['property' => 'apprenants', 'identifiers' => [['id', 'App\\Entity\\Profilsortie', true]], 'collection' => true, 'operationId' => 'api_profilsorties_apprenants_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2576 => [
            [['_route' => 'api_promo_briefs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\PromoBrief', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promo_briefs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\PromoBrief', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2615 => [
            [['_route' => 'api_promo_briefs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\PromoBrief', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promo_briefs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\PromoBrief', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promo_briefs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\PromoBrief', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_promo_briefs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\PromoBrief', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        2665 => [[['_route' => 'api_promos_groupes_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupe', '_api_subresource_operation_name' => 'api_promos_groupes_get_subresource', '_api_subresource_context' => ['property' => 'groupes', 'identifiers' => [['id', 'App\\Entity\\Promo', true]], 'collection' => true, 'operationId' => 'api_promos_groupes_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2709 => [[['_route' => 'api_promos_groupes_apprenants_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_subresource_operation_name' => 'api_promos_groupes_apprenants_get_subresource', '_api_subresource_context' => ['property' => 'apprenants', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['groupes', 'App\\Entity\\Groupe', true]], 'collection' => true, 'operationId' => 'api_promos_groupes_apprenants_get_subresource']], ['id', 'groupes', '_format'], ['GET' => 0], null, false, true, null]],
        2748 => [[['_route' => 'api_promos_referentiel_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Referentiel', '_api_subresource_operation_name' => 'api_promos_referentiel_get_subresource', '_api_subresource_context' => ['property' => 'referentiel', 'identifiers' => [['id', 'App\\Entity\\Promo', true]], 'collection' => false, 'operationId' => 'api_promos_referentiel_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2793 => [[['_route' => 'api_promos_referentiel_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetence', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false]], 'collection' => true, 'operationId' => 'api_promos_referentiel_groupecompetences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2834 => [[['_route' => 'api_promos_referentiel_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false], ['groupecompetence', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_promos_referentiel_groupecompetences_user_get_subresource']], ['id', 'groupecompetence', '_format'], ['GET' => 0], null, false, true, null]],
        2872 => [[['_route' => 'api_promos_referentiel_groupecompetences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false], ['groupecompetence', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_promos_referentiel_groupecompetences_competences_get_subresource']], ['id', 'groupecompetence', '_format'], ['GET' => 0], null, false, true, null]],
        2929 => [[['_route' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetences', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_get_subresource']], ['id', 'groupecompetence', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        2967 => [[['_route' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_promos_referentiel_groupecompetences_competences_groupecompetences_user_get_subresource']], ['id', 'groupecompetence', 'competence', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        2999 => [[['_route' => 'api_promos_referentiel_groupecompetences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_promos_referentiel_groupecompetences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Promo', true], ['referentiel', 'App\\Entity\\Referentiel', false], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_promos_referentiel_groupecompetences_competences_niveaux_get_subresource']], ['id', 'groupecompetence', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        3057 => [
            [['_route' => 'api_livrable_attendus_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3096 => [
            [['_route' => 'api_livrable_attendus_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_livrable_attendus_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LivrableAttendu', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        3126 => [[['_route' => 'api_livrables_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Livrable', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        3164 => [
            [['_route' => 'api_livrables_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Livrable', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_livrables_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Livrable', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_livrables_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Livrable', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_livrables_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Livrable', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        3221 => [[['_route' => 'api_groupes_apprenants_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Apprenant', '_api_subresource_operation_name' => 'api_groupes_apprenants_get_subresource', '_api_subresource_context' => ['property' => 'apprenants', 'identifiers' => [['id', 'App\\Entity\\Groupe', true]], 'collection' => true, 'operationId' => 'api_groupes_apprenants_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3273 => [[['_route' => 'api_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_groupecompetences_user_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3311 => [[['_route' => 'api_groupecompetences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_groupecompetences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_groupecompetences_competences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3368 => [[['_route' => 'api_groupecompetences_competences_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_groupecompetences_competences_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetences', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_groupecompetences_competences_groupecompetences_get_subresource']], ['id', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        3406 => [[['_route' => 'api_groupecompetences_competences_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_groupecompetences_competences_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_groupecompetences_competences_groupecompetences_user_get_subresource']], ['id', 'competence', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        3438 => [[['_route' => 'api_groupecompetences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_groupecompetences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_groupecompetences_competences_niveaux_get_subresource']], ['id', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        3483 => [[['_route' => 'api_groupetags_tags_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_subresource_operation_name' => 'api_groupetags_tags_get_subresource', '_api_subresource_context' => ['property' => 'tag', 'identifiers' => [['id', 'App\\Entity\\Groupetag', true]], 'collection' => true, 'operationId' => 'api_groupetags_tags_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3548 => [[['_route' => 'api_briefs_brief_groupe_promo_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'brief_groupe_promo'], ['idp', 'idg'], ['GET' => 0], null, false, false, null]],
        3581 => [[['_route' => 'api_briefs_update_briefs_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'update_briefs', 'id' => null], ['idpromo', 'idbrief'], ['PUT' => 0], null, false, true, null]],
        3614 => [[['_route' => 'api_briefs_briefs_brouillon_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'briefs_brouillon'], [], ['GET' => 0], null, false, false, null]],
        3630 => [[['_route' => 'api_briefs_briefs_valide_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'briefs_valide'], [], ['GET' => 0], null, false, false, null]],
        3654 => [[['_route' => 'api_briefs_duplique_briefs_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'duplique_briefs', 'id' => null], ['id'], ['POST' => 0], null, false, true, null]],
        3672 => [[['_route' => 'api_briefs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null]],
        3722 => [[['_route' => 'api_briefs_brief_promo_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'brief_promo'], ['idp', 'id'], ['GET' => 0], null, false, true, null]],
        3743 => [[['_route' => 'api_briefs_promo_id_brief_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_collection_operation_name' => 'promo_id_brief'], ['idp'], ['GET' => 0], null, false, false, null]],
        3792 => [[['_route' => 'api_briefs_assignation_briefs_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Brief', '_api_item_operation_name' => 'assignation_briefs'], ['idpromo', 'idbrief'], ['PUT' => 0], null, false, false, null]],
        3839 => [
            [['_route' => 'api_statistiques_competences_GET_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\StatistiquesCompetences', '_api_collection_operation_name' => 'GET'], ['id', 'num'], ['GET' => 0], null, false, false, null],
            [['_route' => 'api_statistiques_competences_POST_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\StatistiquesCompetences', '_api_collection_operation_name' => 'POST'], ['id', 'num'], ['POST' => 0], null, false, false, null],
        ],
        3857 => [[['_route' => 'api_statistiques_competences_PUT_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\StatistiquesCompetences', '_api_item_operation_name' => 'PUT'], ['var', 'num', 'id'], ['PUT' => 0], null, false, true, null]],
        3891 => [[['_route' => 'api_statistiques_competences_compet_stats_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\StatistiquesCompetences', '_api_collection_operation_name' => 'compet_stats'], ['idPr', 'idRef'], ['GET' => 0], null, false, false, null]],
        3935 => [[['_route' => 'api_statistiques_competences_GET_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\StatistiquesCompetences', '_api_item_operation_name' => 'GET'], ['id'], ['GET' => 0], null, false, true, null]],
        3950 => [[['_route' => 'api_formateurs_get_formateur_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Formateur', '_api_item_operation_name' => 'get_formateur'], ['id'], ['GET' => 0], null, false, true, null]],
        4021 => [[['_route' => 'api_referentiels_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetence', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupecompetences_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        4062 => [[['_route' => 'api_referentiels_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupecompetence', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_referentiels_groupecompetences_user_get_subresource']], ['id', 'groupecompetence', '_format'], ['GET' => 0], null, false, true, null]],
        4100 => [[['_route' => 'api_referentiels_groupecompetences_competences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Competence', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_competences_get_subresource', '_api_subresource_context' => ['property' => 'competence', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupecompetence', 'App\\Entity\\Groupecompetence', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupecompetences_competences_get_subresource']], ['id', 'groupecompetence', '_format'], ['GET' => 0], null, false, true, null]],
        4157 => [[['_route' => 'api_referentiels_groupecompetences_competences_groupecompetences_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Groupecompetence', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_competences_groupecompetences_get_subresource', '_api_subresource_context' => ['property' => 'groupecompetences', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupecompetences_competences_groupecompetences_get_subresource']], ['id', 'groupecompetence', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        4195 => [[['_route' => 'api_referentiels_groupecompetences_competences_groupecompetences_user_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_competences_groupecompetences_user_get_subresource', '_api_subresource_context' => ['property' => 'user', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true], ['groupecompetences', 'App\\Entity\\Groupecompetence', true]], 'collection' => false, 'operationId' => 'api_referentiels_groupecompetences_competences_groupecompetences_user_get_subresource']], ['id', 'groupecompetence', 'competence', 'groupecompetences', '_format'], ['GET' => 0], null, false, true, null]],
        4227 => [[['_route' => 'api_referentiels_groupecompetences_competences_niveaux_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Niveau', '_api_subresource_operation_name' => 'api_referentiels_groupecompetences_competences_niveaux_get_subresource', '_api_subresource_context' => ['property' => 'niveau', 'identifiers' => [['id', 'App\\Entity\\Referentiel', true], ['groupecompetence', 'App\\Entity\\Groupecompetence', true], ['competence', 'App\\Entity\\Competence', true]], 'collection' => true, 'operationId' => 'api_referentiels_groupecompetences_competences_niveaux_get_subresource']], ['id', 'groupecompetence', 'competence', '_format'], ['GET' => 0], null, false, true, null]],
        4269 => [
            [['_route' => 'api_ressources_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ressources_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4308 => [
            [['_route' => 'api_ressources_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ressources_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_ressources_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_ressources_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Ressource', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
